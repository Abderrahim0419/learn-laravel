<?php

namespace App\Http\Controllers;

use App\Exports\PostExport;
use App\Mail\PostMail;
use App\Models\Post;
use App\Models\Test;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
class PostController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     // $this->middleware('check-user')->except('index');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::Paginate(3)
        $users = User::whereNotNull('created_at')->get();
        $post = Post::all();
        foreach ($post as $key => $value) {
            // dd(\Carbon\Carbon::parse($value->created_at)->year(now()->format('Y'))->addMonth(3)->format('Y-m-d'));
            // $carbon = [\Carbon\Carbon::parse($value->created_at)->addMonth(3),\Carbon\Carbon::parse($value->created_at)->addMonth(6),\Carbon\Carbon::parse($value->created_at)->addMonth(9),\Carbon\Carbon::parse($value->created_at)->addMonth(12)];
            // foreach ($carbon as $key => $date) {
            //     $test = new Test();
            //     $test->date_test = $date;
            //     $test->save();
            //     # code...
            // }
            # code...   
        }
        return view('post.posts',compact('posts','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function exportexcel()
    {
        return Excel::download(new PostExport, 'posts.xlsx');
    }
    public function exportPDF($id)
    {
        $post = Post::find($id);
        $pdf = PDF::loadView('post.details-post',compact('post'));
       return $pdf->download('post.pdf');
        
    }
    public function create()
    {
        $user = User::all();
        $post = [];
        // $test = DB::table('users')
        // ->leftjoin('posts','posts.user_id','=','users.id')
        // ->selectRaw('*')
        // ->get();
        // dd($test);
        return view('post.add-post',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->user_id = $request->user;
        $post->save();
        Mail::to('test@gmail.com')->send(new PostMail());
        Alert::toast('Success Add','success');
        // return response()->json(['success' => true]); 
        return to_route('posts')->with('message','Data ADD succefuly');

    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $user = User::all();

        return view('post.update-post',compact('post','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$idd)
    {
        $post = Post::find($idd);
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->user_id = $request->user;
        $post->save();
        Alert::toast('Success Update','success');    
        return to_route('posts')->with('message','Data update succefuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post,$id)
    {
        $post = Post::find($id);
        if ($post) {
            $post->delete();
        }
        Alert::toast('Success delete','success');        ;
        return to_route('posts')->with('message','Data deleted succefuly');
    }
}
