@extends('layouts.app')
@section('content')

{{-- <div class="sp-area">
    <div class="container">
        @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong></strong>  {{session()->get('message')}}
            </div> 
        @endif
    </div>
</div> --}}
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <a href=" {{route('posts.create')}} " class="btn btn-success">Ajouter</a>
            <a href=" {{route('posts.export')}} " class="btn btn-success">export excel</a>
            {{-- <a href=" {{route('posts.exportpdf')}} " class="btn btn-success">export Pdf</a> --}}


            <table class="table">
                <thead>
                    <th>title</th>
                    <th>content</th>
                    <th>user</th>
                    <th>Role</th>
                    <th>edit</th>
                    <th>delete</th>
                    <th>pdf</th>

                </thead>
                <tbody>
                    @foreach ($posts as $item)
                        <tr>
                            <td> {{$item->title}} </td>
                            <td> {{$item->content}} </td>
                            <td class="text-primary"> {{$item->user ? $item->user->name : 'not found'}} </td>
                            <td class="text-primary"> {{$item->user ? $item->user->role->name : 'not found'}} </td>

                            {{-- {!!$item->getUser()!!} --}}
                            <td><a href="{{route('posts.edit',$item->id)}}" class="btn btn-warning">edit</a></td>
                            <td><a href=" {{route('posts.destroy',$item->id)}} " class="btn btn-danger">delete</a></td>
                            <td><a href="{{route('posts.exportpdf',$item->id)}}" download class="btn btn-primary">pdf</a></td>

                        </tr>
                    @endforeach
                    
                </tbody>
                
                
            </table>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                {{$posts->links()}}
                </ul>
              </nav>
              <table class="table">
                <thead>
                    <th>title</th>
                    <th>content</th>
                    <th>user</th>
                    <th>Role</th>
                    <th>edit</th>
                    <th>delete</th>
                    <th>pdf</th>

                </thead>
                <tbody>
                    @foreach ($users as $itemm)
                        @foreach ($itemm->post as $item)
                            <tr>
                                <td> {{$item->title}} </td>
                                <td> {{$item->content}} </td>
                                <td class="text-primary"> {{$item->user ? $item->user->name : 'not found'}} </td>
                                <td class="text-primary"> {{$item->user ? $item->user->role->name : 'not found'}} </td>
                                <td>{{$itemm->email}}</td>
                                {{-- {!!$item->getUser()!!} --}}
                                <td><a href="{{route('posts.edit',$item->id)}}" class="btn btn-warning">edit</a></td>
                                <td><a href=" {{route('posts.destroy',$item->id)}} " class="btn btn-danger">delete</a></td>
                                <td><a href="{{route('posts.exportpdf',$item->id)}}" download class="btn btn-primary">pdf</a></td>

                            </tr>
                        @endforeach
                        
                    @endforeach
                    
                </tbody>
                
                
            </table>
        </div>
    </div>
</div>
    
@endsection