@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
           <form action="{{route('posts.store')}}" method="post">
            @csrf
            <label for="">title</label>
                <input type="text" class="form-control" name="title" placeholder="title">
                <label for="">content</label>
                <input type="text" class="form-control" name="content" placeholder="content">
                <label for="">user</label>
              {{-- @foreach ($test as $item)
                  <label for="">{{$item->name}}</label>
              @endforeach --}}

                <select name="user" id="" class="form-control" >
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
