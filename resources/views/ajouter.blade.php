@extends('layouts.app')
@section('content')
<h1>Ajouter</h1>
<form action="{{route('test.store')}}" method="POST">
    @csrf
    <label for="">id</label>
    <input type="text" name="id" placeholder="id">
    <label for="">nom</label>
    <input type="text" name="nom" placeholder="nom">
    <input type="submit">

</form>
    
@endsection