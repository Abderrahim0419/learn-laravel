@extends('layouts.app')
@section('content')
<h1>Test</h1>
<table>
    <th>id</th>
    <th>nom</th>
    <th>edit</th>
    @foreach ($posts as $item)

    <tr>
      <td><a href="{{route('test-details',$item['id'])}}">{{$item['id']}}</a></td>
      <td>{{$item['nom']}}</td>
      <td><a href="{{route('test-edit',$item['id'])}}">edit</a></td>
    </tr>
    @endforeach

</table>
  {{-- <li> <a href="{{route('test-details',$item['id'])}}">{{$item['id']}}</a></li> 
  <li> <a href="{{route('test-edit',$item['id'])}}">edit</a></li> 

    <li>{{$item['nom']}}</li> --}}

    
@endsection