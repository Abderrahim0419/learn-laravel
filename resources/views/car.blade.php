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
            <a href=" {{route('car.create')}} " class="btn btn-success">Ajouter</a>
            <table class="table">
                <thead>
                    <th>CAR</th>
                    <th>DRIVER</th>
                    <th>Image</th>
                    <th>edit</th>
                    <th>delete</th>
                </thead>
                <tbody>
                    @foreach ($cars as $item)
                        <tr>
                            <td> {{$item->nom}} </td>
                            <td> 
                                @foreach ($item->driver as $driver)
                                    <span class="text-success"> {{$driver->nom}} ,</span>
                                @endforeach
                            </td>
                            <td><img src="{{$item->getImage()}}" height="100" alt="" srcset=""></td>
                            {!!$item->getUser()!!}
                            {{-- <td><a href=" {{route('car.edit',$item->id)}} " class="text-warning">edit</a></td>
                            <td><a href=" {{route('car.destroy',$item->id)}} " class="text-danger">delete</a></td> --}}

                        </tr>
                    @endforeach
                    
                </tbody>
                
                
            </table>
            <table class="table">
                <thead>
                    <th>DRIVER</th>
                    <th>CAR</th>
                    <th>edit</th>
                    <th>delete</th>
                   

                </thead>
                <tbody>
                    @foreach ($drivers as $item)
                    <tr>
                            <td> {{$item->nom}} </td>
                            <td> 
                                @foreach ($item->car as $car)
                                    <span class="text-success"> {{$car->nom}} ,</span>
                                @endforeach
                            </td>
                            
                        </tr>
                    @endforeach
                    
                </tbody>
                
                
            </table>
  
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                {{-- {{$posts->links()}} --}}
                </ul>
              </nav>
        </div>
    </div>
</div>
    
@endsection