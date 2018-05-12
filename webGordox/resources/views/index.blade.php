@extends('mainSiteMaster')

@section('content')
<div class="row">
  <!-- Left side content -->
  <div class="col-sm-9">

    <!--About me -->
    <div>
      Hej
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
      col-sm-3
    </div>
  </div>

</div>
@endsection
