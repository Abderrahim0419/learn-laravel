@extends('layouts.app')
@section('content')
<h1>Modifier</h1>
<form action="{{route('test.update')}}" method="POST">
    @csrf
    @method('put')
    <label for="">id</label>
    <input type="text" name="id" placeholder="id"  value="{{$post['id']}}">
    <label for="">nom</label>
    <input type="text" name="nom" placeholder="nom" value="{{$post['nom']}}">
    <input type="submit">

</form>
    
@endsection