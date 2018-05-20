@extends('mainSiteMaster')

@section('content')
<div class="row">
  <div class="col ml-2">
    <h2>{{$title}}</h2>
  </div>
  <div class="col mt-1 mr-2">
    <button type="button" class="btn btn-primary float-right">Add work page</button>
  </div>
</div>

@foreach($works as $work)
<div class="row mt-1">
  <!--WORK IMG-->
  <div class="col-sm-3">
    <img class="ml-2" src="" alt="WORK IMG HERE">
  </div>

  <!--WORK INFO-->
  <div class="col-sm-7">
    <!--Title and date-->
    <div class="row">
      <div class="col">
        <h3>{{$work->title}}</h3>
      </div>

      <div class="col">
        <p class="float-right mr-2">Date</p>
      </div>
    </div>
    <!--Work info content-->
    <p>{{$work->long_description}}</p>

    <!--Work Tags-->
    <div>
      <p class="float-right mr-2">tags: {{$work->tags}}</p>
    </div>
  </div>

  <div class="col-sm-2">
    <button class="btn btn-primary" type="button" name="button">Edit</button>
    <button class="btn btn-primary" type="button" name="button">Download</button>
  </div>
</div>

<div class="border-bottom"></div>
<p></p>
@endforeach

@endsection
