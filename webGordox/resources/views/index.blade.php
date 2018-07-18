@extends('mainSiteMaster')

@section('content')
<div class="row">

  <!-- Left side content -->
  <div class="col-sm-9 mt-3 mb-3 border-right">

    <!--About me -->
    <div class="row"> <!-- add padding-->

      <!--Image of me-->
      <div class="col-sm-4">
        <img class="meIndexImg ml-3" src="{{URL::to('/image_files/etc_imgs/me')}}/{{$viewData->anton->img_url}}"
         alt="Error 404, img not found">
      </div>

      <!--Bio of me-->
      <div class="col-sm-8">
        <h5>Hello there</h5>
        <div class="border rounded" >
          <p class="ml-2">{{$viewData->anton->description}}</p>
        </div>

      </div>
    </div>

    <!--Image slider-->
    <div class="row justify-content-center">
      <div class="col-10">

        <div id="myCarousel" class="carousel slide mt-2" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <?php
                  $count = 0;
                  foreach ($viewData->slidershow as $key => $value) {
                    $count++;
                  }
                  for ($i = 1; $i < $count; $i++) {
                    echo '<li data-target="#myCarousel" data-slide-to="',$i,'"></li>';
                  }
                 ?>
              </ol>

              <div class="carousel-inner" style="height: 300px;">
                <?php
                  $count = 0;
                  foreach ($viewData->slidershow as $key => $show) {
                    if($count == 0)
                      echo '<div class="carousel-item active">';
                    else
                      echo '<div class="carousel-item">';

                    $url = URL::to('/image_files/work_imgs/', json_decode($show->img_url)[0]);
                    echo
                    '
                     <div class="row">
                      <div class="col-6 text-center">
                        <img class="sliderImg" src="',$url,'" alt="First slide">
                      </div>
                      <div class="col-6">
                        <h1 class="text-center">',$show->title,'</h1>
                        <p>',$show->short_description,'</p>
                      </div>
                    </div>
                  </div>';
                  $count++;
                  }
                 ?>
              </div>

              <!-- Slider controler -->
              <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div><!--/carousel Image slider-->
      </div>

      </div>
    </div>


  <!-- Right side content -->
  <div class="col-sm-3">

    <!-- Recent update slider -->
    <div>

      <h4 class="text-center border-bottom">Recent updates</h4>

      <div class="justify-content-start Sidescroller" id="leftCol">

        @foreach ($works as $work)
        <div class="card box-shadow CardColor">
          <img class="card-img-top" src="{{URL::to('/image_files/work_imgs/')}}/{{json_decode($work->img_url)[0]}}"
           alt="Card image cap">

          <div class="card-body">
            <p class="card-text">
              <h4>{{$work->title}}</h4>
            </p>

            <div class="d-flex justify-content-between align-items-center float-right">
              <small class="text-muted">{{substr($work->created_at,0, 10)}}</small>
            </div>
          </div>
        </div>
        <p></p>
        @endforeach

      </div>
    </div>

  </div>

</div>
@endsection
