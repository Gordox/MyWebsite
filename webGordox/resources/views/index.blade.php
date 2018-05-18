@extends('mainSiteMaster')

@section('content')
<div class="row">

  <!-- Left side content -->
  <div class="col-sm-9">

    <!--About me -->
    <div class="row"> <!-- add padding-->

      <!--Image of me-->
      <div class="col-sm-4">
        <img src="http://3.bp.blogspot.com/-AbZ0jNwaazg/UHP1lMdqWBI/AAAAAAAAAO0/kdG27DNnjcw/s320/normal_naruto_uzumaki_by_meshugene_render_by_maksitobi.png"
         alt="Hej col-sm-3">
      </div>

      <!--Bio of me-->
      <div class="col-sm-8">
        <h5>Hello there</h5>
        <p>{{$anton->description}}</p>
      </div>
    </div>

    <!--Image slider-->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="first-slide" src="http://demos.cryoutcreations.eu/wordpress/fluida/wp-content/uploads/2013/02/jellyfish-698521-1920x250.jpg" alt="First slide">
              <div class="container">
                <div class="carousel-caption text-left">
                  <h1>Example headline.</h1>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                  <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <img class="first-slide" src="http://demos.cryoutcreations.eu/wordpress/fluida/wp-content/uploads/2013/02/jellyfish-698521-1920x250.jpg" alt="Second slide">
              <div class="container">
                <div class="carousel-caption">
                  <h1>Another example headline.</h1>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                  <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <img class="third-slide" src="http://demos.cryoutcreations.eu/wordpress/fluida/wp-content/uploads/2013/02/jellyfish-698521-1920x250.jpg" alt="Third slide">
              <div class="container">
                <div class="carousel-caption text-right">
                  <h1>One more for good measure.</h1>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                  <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                </div>
              </div>
            </div>
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

  <!-- Right side content -->
  <div class="col-sm-3">

    <!-- Recent update slider -->
    <div>

      <h4 class="text-center border-bottom">Recent updates</h4>

      <div class="justify-content-start" id="leftCol">

        @foreach ($works as $work)
        <div class="card box-shadow">
          <img class="card-img-top" src="https://www.dagonuniversity.edu.mm/wp-content/uploads/2016/02/sample-img-250x200.jpg" alt="Card image cap">

          <div class="card-body">
            <p class="card-text">
              <h4>{{$work->title}}</h4>
              {{$work->short_description}}
            </p>

            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
              </div>

              <small class="text-muted">9 mins</small>
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
