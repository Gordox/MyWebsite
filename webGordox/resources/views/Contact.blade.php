@extends('mainSiteMaster')

@section('content')
<div class="row">
  <div class="col ml-2 mr-1">
    <h2>{{$title}}</h2>
  </div>
  <!-- Add if here with admin auth -->
  <div class="col mt-1 mr-2">
    <button class="btn btn-primary float-right" type="button"
     onclick="location.href='/contact/edit/me'"> Edit profile</button>
  </div>

</div>

<div class="row ml-3 mr-3">
  <div class="col">

    <!--link to link, twitter, YouTube etc-->
    <div>
      <a data-provider="mail" target="_blank" href="mailto:{{$anton->email}}?Site%20Mail">
        <img src="" alt="Email">
      </a>

      <a  target="_blank" href="http://www.linkedin.com/in/anton-svensson">
        <img src="" alt="LinkIn">
      </a>

      <a target="_blank"  href="http://www.twitter.com/DsGordox">
        <img src="" alt="Twitter">
      </a>

      <a target="_blank" href="http://www.youtube.com/antonsvensson94">
        <img src="" alt="YouTube">
      </a>

      <a target="_blank" href="http://www.github.com/Gordox">
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

        <img src="{{$anton->img_url}}"
         alt="IMG OF ME">
        <div class="mt-1">
          <p>Name: {{$anton->name}}</p>
          <p>Email: {{$anton->email}}</p>
          <p>Location: {{$anton->location}}</p>
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
