@extends('mainSiteMaster')

@section('content')
<div class="row">
  <div class="col ml-2">
    <h2>{{$viewData->title}}</h2>
  </div>
  <div class="col mt-1 mr-2">
    @if($viewData->controller == 'HobbyWorkController')
    <button class="btn btn-primary float-right" type="button"
     onclick="location.href='/hobby-works/create'"> Add work page</button>
    @else
     <button class="btn btn-primary float-right" type="button"
      onclick="location.href='/professional-works/create'"> Add work page</button>
    @endif
  </div>
</div>

@foreach($works as $work)
<div class="row mt-1">
  <!--WORK IMG-->
  <div class="col-sm-3">
    <img class="ml-2" src="{{URL::to('/work_imgs')}}/{{$work->img_url}}" alt="WORK IMG HERE">
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
    <p><<?php echo nl2br($work->long_description);?></p>

    <!--Work Tags-->
    <div>
      <p class="float-right mr-2">tags: {{$work->tags}}</p>
    </div>
  </div>

  <!--Add if statement later for access of buttons-->
  <div class="col-sm-2 mb-2">
    <div class="">
      <button class="btn btn-primary mb-1" type="button" name="button">Download</button>

      <button class="btn btn-primary mb-1" type="button"
       onclick="location.href='/hobby-works/show/{{$work->id}}'" >Read more</button> <br/>

       <button class="btn btn-primary mb-1" type="button"
        onclick="location.href='/hobby-works/edit/{{$work->id}}'" >Edit</button>
    </div>
  </div>
</div>

<div class="border-bottom"></div>
<p></p>
@endforeach

@endsection
