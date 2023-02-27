@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-sm-12">
      <h1>Ajouter</h1>
      <form action=" {{route('car.store')}} " method="POST" enctype="multipart/form-data">
          @csrf
          <label for="">nom</label>
          <input type="text" name="nom" placeholder="nom" class="form-control">
          <label for="">Image</label>
          <input type="file" name="image"   class="form-control">
          <label for="">driver</label>
            <select id="driver" name="driver[]" multiple class="form-control" >
              @foreach ($driver as $item)
                <option value="{{$item->id}}">{{$item->nom}}</option>
              @endforeach
            </select>
            
          <input type="submit">

      </form>
    </div>
</div>

    
@endsection
@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />
  <script>
      $(document).ready(function(){
          $('#driver').multiselect({
          nonSelectedText: 'Select driver',
          enableFiltering: true,
          enableCaseInsensitiveFiltering: true,
          buttonWidth:'400px'
          });
      
      });
  </script>
    
@endsection