<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function Apistore(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->user_id = $request->user;
        $post->save();
        
        // return response()->json(['message'=>'success','data'=>$post]);
        // Mail::to('test@gmail.com')->send(new PostMail());
        // Alert::toast('Success Add','success'); 
        // return to_route('posts')->with('message','Data ADD succefuly');
        // DB::table('posts')->insert([
        //     'title' =>$request->title,
        //     'content' =>  $request->content,
        //     'user_id' => $request->user

        // ]);
    }
    public function getUser()
    {
        // $posts = Post::all();
        $users = User::all();
        return response()->json($users);
    }
    public function getPost(){
        // $posts = Post::all();
        $posts = DB::table('posts')
        ->leftjoin('users','users.id','=','posts.user_id')
        ->selectRaw('posts.*,users.name')
        ->get();
        return response()->json($posts);

    }
    public function getOnePost($id){
        // $post = Post::find($id);
        // dd($post->user);
        $post = DB::table('posts')
        ->where('posts.id','=',$id)
        ->leftjoin('users','users.id','=','posts.user_id')
        ->selectRaw('posts.*,users.name')
        ->first();
        return response()->json($post);

    }
    public function UpdatePost(Request $request,$id){
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->user_id = $request->user;
        $post->save();

    }
    public function DeletePost($id)
    {
        $post = Post::find($id);
        if ($post) {
            $post->delete();
        }
    }

}
