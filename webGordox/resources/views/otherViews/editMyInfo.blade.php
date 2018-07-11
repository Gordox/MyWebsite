@extends('mainSiteMaster')
@section('content')
@if (count($errors) > 0)
<div class="alert alert-danger">
  <strong>Whoops!</strong> There were some problems with your input.<br><br>
  <ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif
@if(session('success'))
<div class="alert alert-success">
  {{ session('success') }}
</div>
@endif
<div class="row mr-1 ml-1">
  <div class="col mb-2">
    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data"
     action="{{ action('ContactController@update', $anton->id) }}">
    {{ method_field('PUT') }}
    {{ csrf_field() }}

    <div class="col pt-1">
      <h1 class="text-center bordet-bottom">Edit information</h1>
    </div>
    <!-- Top information -->
    <div class="row">

      <!-- Left side -->
      <div class="col">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name" value="{{$anton->name}}">
        </div>

        <div class="form-group">
          <label for="email">E-mail</label>
          <input type="text" class="form-control" id="email" name="email" value="{{$anton->email}}">
        </div>

        <div class="form-group">
          <label for="location">Location</label>
          <input type="text" class="form-control" id="location" name="location" value="{{$anton->location}}">
        </div>
      </div>

      <!-- right side -->
      <div class="col">
        <div class="form-group">
          <label for="age">Age</label>
          <input type="number" class="form-control" id="age" name="age" value= "{{$anton->age}}">
        </div>

        <div class="form-group">
          <label for="code_tags">Code tags</label>
          <input type="text" class="form-control" id="code_tags" name="code_tags" value="{{$anton->code_tags}}">
        </div>

        <div class="form-group">
          <label for="img_url">Image</label>
          <div class="input-group control-group" >
            <input type="file" name="imageFile[]" class="form-control">
          </div>
        </div>
      </div>

    </div>

    <!-- Descritopn information -->
    <div class="form-group">
      <label for="description">Description</label>
      <textarea type="text" class="form-control" id="description" name="description"
       rows="4" cols="80">{{$anton->description}}</textarea>
    </div>

    <!-- Buttons -->
    <div class="">
      <input type="submit" value="Save edit" class="btn btn-success">
      <a href="{{ action('ContactController@index')}}"
         type="button" class="btn btn-danger">Discard</a>
    </div>
  </div>
</div>
@endsection


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
