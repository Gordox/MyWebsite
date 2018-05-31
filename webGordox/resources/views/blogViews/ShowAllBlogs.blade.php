@extends('mainSiteMaster')

@section('content')

<!-- Page title and add button -->
<div class="row">
  <div class="col ml-2">
    <h2>{{$title}}</h2>
  </div>
  <div class="col mt-1 mr-2">
    <button class="btn btn-primary float-right" type="button"
     onclick="location.href='/blog/create'">Add blog page</button>
  </div>
</div>

<div class="row">
  <!--Left side-->
  <div class="col-9">
    <!--Content-->
    <div class="ml-3 mr-1">
      <h2>Title</h2>
      <h6>Date + more</h6>

      <div class="headerImage"></div>
      <!--Main content here-->
      <div class="row mt-2">

        <div class="col-sm-10">
          <p>Text <br/> me</p>
        </div>

        <div class="col-sm-2">
          <button type="button" class="btn btn-primary float-right">Read more</button>
        </div>

      </div>

      <!--Style-->
      <div class="border-bottom"></div>
      <p></p>
    </div>
  </div>

  <!--Right side-->
  <div class="col-3 border-left">
    <div class="ml-1 mr-1">
      <h2 class="text-center border-bottom">Archives</h2>
      <ul>
        <li>April 2018</li>
        <li>Mars 2018</li>
        <li>Febuary 2018</li>
        <li>Januray 2018</li>
      </ul>
    </div>
  </div>
</div>
@endsection
