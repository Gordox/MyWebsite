@extends('mainSiteMaster')

@section('content')
<div class="row">
  <div class="col ml-2 mr-1">
    <h2>{{$title}}</h2>
  </div>
</div>

<div class="row ml-3 mr-3">
  <div class="col">

    <!--link to link, twitter, YouTube etc-->
    <div>
      <a data-provider="mail" target="_blank" href="mailto:antonsvensson1994@gmail.com?Site%20Mail">
        <img src="" alt="Email">
      </a>

      <a  target="_blank" href="www.linkedin.com/in/anton-svensson">
        <img src="" alt="LinkIn">
      </a>

      <a target="_blank"  href="www.twitter/DsGordox">
        <img src="" alt="Twitter">
      </a>

      <a target="_blank" href="www.youtube.com/antonsvensson94">
        <img src="" alt="YouTube">
      </a>

      <a target="_blank" href="www.github.com/Gordox">
        <img src="" alt="Github">
      </a>
    </div>
  </div>

  <!-- Col splitter-->
  <div class="w-100"></div>

    <!--ME-->
  <div class="col">
    <div class="row">
      <div class="col">

        <img src="" alt="IMG OF ME">
        <div class="mt-1">
          <p>Name: Anton Svensson</p>
          <p>Email: antonsvensson1994@gmail.com</p>
          <p>Location: Sweden</p>
        </div>
      </div>

      <!--Links I think is cool-->
      <div class="col">
        <h3>Cool Links</h3>
        <a href="#">lol</a><br/>
        <a href="#">HEJ</a>

      </div>
    </div>
  </div>
</div>

@endsection
