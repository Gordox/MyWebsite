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
  <div class="col-sm-4 text-center">
    <img class="ml-2" src="{{URL::to('/image_files/work_imgs/')}}/{{json_decode($work->img_url)[0]}}"
     alt="WORK IMG HERE">
  </div>

  <!--WORK INFO-->
  <div class="col-sm-8">
    <!--Title and date-->
    <div class="row">
      <div class="col">
        <h3>{{$work->title}}</h3>
      </div>

      <div class="col">
        <p class="float-right mr-2">
          <?php echo(substr($work->created_at,0, 10));?>
        </p>
      </div>
    </div>
    <!--Work info content-->
    <p><?php echo nl2br($work->long_description);?></p>

    <!--Work Tags-->
    <div class="row">
      <div class="col">
        <p class="float-right mr-2">tags: {{$work->tags}}</p>
      </div>
    </div>

    <!-- buttons -->
    <div class="row" >
      <div class="col">
        <div class="float-right">

          @if($work->has_download_url == 'true')
          <button class="btn btn-primary mb-1" type="button" name="button">Download</button>
          @endif

          @if($work->has_more_info == 'true')
          <button class="btn btn-primary mb-1" type="button"
           onclick="location.href='/hobby-works/show/{{$work->id}}'" >Read more</button>
          @endif

          <button class="btn btn-primary mb-1" type="button"
           onclick="location.href='/{{$viewData->editDir}}/edit/{{$work->id}}'" >Edit</button>
        </div>
      </div>
    </div> <!-- /row Buttons-->

  </div>
</div>

<div class="border-bottom mt-3"></div>
<p></p>
@endforeach

@endsection
