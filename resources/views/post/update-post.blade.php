@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
           <form action="{{route('posts.update',$post->id)}}" method="post">
            @csrf
            @method('put')
            <label for="">title</label>
                <input type="text" class="form-control" name="title" placeholder="title" value="{{$post->title}}">
                <label for="">content</label>
                <input type="text" class="form-control" name="content" placeholder="content" value="{{$post->content}}">
                <label for="">user</label>
                <select name="user" id="" class="form-control" >
                    <option value="{{$post->user->id}}">{{$post->user->name}}</option>

                    @foreach ($user as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
                <button class="btn btn-primary m-1" type="submit">Ajouter</button>
           </form>
        </div>
    </div>
</div>
    
@endsection