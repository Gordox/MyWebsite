@extends('mainSiteMaster')

@section('content')
<div class="row">
  <div class="col">
    <h2>{{$title}}</h2>

    @foreach($hobbyworks as $hobbywork)
    <div class="row">
      <!--WORK IMG-->
      <div class="col-sm-3">
        IMG
      </div>

      <!--WORK INFO-->
      <div class="col-sm-8">
        <div>
          <h3>{{$hobbywork->title}}</h3>
          <p>Date</p>
          <p>{{$hobbywork->long_description}}</p>
        </div>

        <div style="float: Right;">
          <p>tags: {{$hobbywork->tags}}</p>
        </div>
      </div>
      <div class="col-sm-1"></div>
    </div>

    <div class="border-bottom"></div>
    @endforeach
    <p></p>
  </div>
</div>
@endsection
