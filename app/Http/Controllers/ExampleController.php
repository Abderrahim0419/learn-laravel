<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = array(
            
            array('id' =>'1' , 'nom'=>'ahmed4'),
            array('id' =>'2' , 'nom'=>'ahmed3'),
            array('id' =>'3' , 'nom'=>'ahmed2'),
            array('id' =>'4' , 'nom'=>'ahmed1'),

        );
        dd($posts);
        return view('test',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ajouter');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
        $post = [
            1 => ['id' =>'1' , 'nom'=>'ahmed4'],
            2=>  ['id' =>'2' , 'nom'=>'ahmed3'],
            3 =>  ['id' =>'3' , 'nom'=>'ahmed2'],
            4 =>  ['id' =>'4' , 'nom'=>'ahmed1'],

        ];
           

        return view('details-test',['post'=>$post[$id]]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = [
            1 => ['id' =>'1' , 'nom'=>'ahmed4'],
            2=>  ['id' =>'2' , 'nom'=>'ahmed3'],
            3 =>  ['id' =>'3' , 'nom'=>'ahmed2'],
            4 =>  ['id' =>'4' , 'nom'=>'ahmed1'],

        ];
           

        return view('test-edit',['post'=>$post[$id]]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        dd($request);
        // return to_route('test');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
