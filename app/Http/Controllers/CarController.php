<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Driver;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Notifications\NewCarNotification;
use Illuminate\Support\Facades\Notification;

class CarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('check-admin')->except('index');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
        $drivers = Driver::all();
        return view('car',compact('cars','drivers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $driver = Driver::all();
        return view('add-car', compact('driver'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $car = new Car();
        $car->nom = $request->nom;
        if ($image = $request->file('image')) {
            $destinationPath =public_path().'/storage/carimg';// public_path(storage_path('car-image'));
            // dd($destinationPath);
            $name = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $name);
            $car['image'] = "$name";
        }
        // if($request->hasfile('image')){
        //     foreach($request->file('image') as $key => $file)
        //     {   $path =  base_path().'/public/storage/carimg';
        //         $name =  gmdate('Y-m-d-h-i-s')."$key".'.' . $file->getClientOriginalExtension();
        //         $file->move($path, $name);
        //         $Imgdata[] = $name;
        //     }
        //     $car->imgs = json_encode($Imgdata);
        // } 
       
        $driver =$request->driver;
        $car->save();
        $car->driver()->attach($driver);
        $admins = User::where('role_id',1)->get();
        Notification::send($admins, new NewCarNotification($car));
        // $car->notify(new NewCarNotification($car));
        Alert::toast('Success Add','success');
        return to_route('car');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car,$id)
    {
        $car = Car::find($id);
        $driver = Driver::all();
        return view('edit-car',compact('car','driver'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car,$id)
    {
        $car = Car::find($id);
        $car->nom = $request->nom;

        if ($image = $request->file('image')) 
        {
            $destinationPath =base_path().'/public/storage/carimg';
            $name = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $name);
            $car['image'] = "$name";

        }
        else{}
        $driver =$request->driver;
        $car->driver()->sync($driver)  ;
        $car->save();

        Alert::toast('Success update','success');
        return to_route('car');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car,$id)
    {
        $car = Car::find($id);
        $car ->driver()->detach();
        $car ->delete();
        Alert::toast('Success delete','success');
        return to_route('car');
    }
}
