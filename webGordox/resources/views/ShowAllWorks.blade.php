@extends('mainSiteMaster')

@section('content')
<div class="row">
  <div class="col ml-2">
    <h2>{{$title}}</h2>

    @foreach($works as $work)
    <div class="row">
      <!--WORK IMG-->
      <div class="col-sm-3">
        IMG
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
        <button type="button" name="button">Edit</button>
        <button type="button" name="button">Download</button>
      </div>
    </div>

    <div class="border-bottom"></div>
    <p></p>
    @endforeach
    <p></p>
  </div>
</div>
@endsection
