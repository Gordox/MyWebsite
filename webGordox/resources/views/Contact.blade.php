@extends('mainSiteMaster')

@section('content')
<div class="row">
  <div class="col ml-2 mr-1">
    <h2>{{$viewData->title}}</h2>
  </div>
  <!-- Add if here with admin auth -->
  @if (Auth::check() && Auth::user()->isAdmin())
  <div class="col mt-1 mr-2">
    <button class="btn btn-outline-secondary float-right" type="button"
     onclick="location.href='/contact/edit/me'"> Edit profile</button>
  </div>
  @endif

</div>

<div class="row ml-3 mr-3">
  <div class="col">

    <!--link to link, twitter, YouTube etc-->
    <div>
      <a data-provider="mail" target="_blank" href="mailto:{{$anton->email}}?Site%20Mail">
        <img class="iconImg" src="{{URL::to('')}}{{$viewData->mailSRC}}" alt="Email">
      </a>

      <a  target="_blank" href="http://www.linkedin.com/in/anton-svensson">
        <img class="iconImg" src="{{URL::to('')}}{{$viewData->linkInSRC}}" alt="LinkIn">
      </a>

      <a target="_blank"  href="http://www.twitter.com/DsGordox">
        <img class="iconImg" src="{{URL::to('')}}{{$viewData->twitterSRC}}" alt="Twitter">
      </a>

      <a target="_blank" href="http://www.youtube.com/antonsvensson94">
        <img class="iconImg" src="{{URL::to('')}}{{$viewData->youTubeSRC}}" alt="YouTube">
      </a>

      <a target="_blank" href="http://www.github.com/Gordox">
        <img class="iconImg" src="{{URL::to('')}}{{$viewData->gitHubSRC}}" alt="Github">
      </a>
    </div>
  </div>

  <!-- Col splitter-->
  <div class="w-100"></div>

    <!--ME-->
  <div class="col">
    <div class="row">
      <div class="col">

        <img class="meContactImg mt-1" src="{{URL::to('/image_files/etc_imgs/me')}}/{{json_decode($anton->img_url)[0]}}"
         alt="IMG OF ME">
        <div class="mt-3">
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
