@extends('mainSiteMaster')

@section('content')
<div class="row">
  <div class="col ml-2">
    <h2>{{$viewData->title}}</h2>
  </div>
  @if (Auth::check() && Auth::user()->isAdmin())
  <div class="col mt-1 mr-2">
    @if($viewData->controller == 'HobbyWorkController')
    <button class="btn btn-outline-secondary float-right" type="button"
     onclick="location.href='/hobby-works/create'"> Add work page</button>
    @else
     <button class="btn btn-outline-secondary float-right" type="button"
      onclick="location.href='/professional-works/create'"> Add work page</button>
    @endif
  </div>
  @endif
</div>

<!-- If no work this text will be displayed -->
@if($works->count() == 0)
<div class="row mt-1">
  <div class="col text-center ">
    <h2>Work has yet to be added, please come back another time</h2>
  </div>
</div>
@endif

@foreach($works as $work)
<div class="row mt-1">

  <!--WORK IMG and video -->
  <div class="col-sm-5">
    <div class="row">
      <!--Video -->
      <div class="col ml-2 mr-2">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item"
           src="{{$work->vid_url}}" allowfullscreen="allowfullscreen" frameborder="0">
          </iframe>
        </div>
      </div>

      <div class="w-100"></div>

      <!--Imiges -->
      <div class="col text-center">
        @foreach(json_decode($work->img_url) as $img)
        <img class="ml-2 mt-2 imgAllWorks" src="{{URL::to('/image_files/work_imgs/')}}/{{$img}}"
         alt="{{$work->title}}">
        @endforeach
      </div>
    </div>

  </div>

  <!--WORK INFO-->
  <div class="col-sm-7">
    <!--Title and date-->
    <div class="row">
      <div class="col">
        <h3>{{$work->title}}</h3>
      </div>

      <div class="col">
        <p class="float-right mr-2">
          {{substr($work->created_at,0, 10)}}
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
        <div class="float-right mr-2">

          @if($work->has_download_url == 'true')
          <button class="btn btn-outline-secondary mb-1" type="button" name="button">Download</button>
          @endif

          @if($work->has_more_info == 'true')
          <button class="btn btn-outline-secondary mb-1" type="button"
           onclick="location.href='/hobby-works/show/{{$work->id}}'" >Read more</button>
          @endif

          @if (Auth::check() && Auth::user()->isAdmin())
          <button class="btn btn-outline-secondary mb-1" type="button"
           onclick="location.href='/{{$viewData->editDir}}/edit/{{$work->id}}'" >Edit</button>
          @endif
        </div>
      </div>
    </div> <!-- /row Buttons-->

  </div>
</div>

<div class="border-bottom mt-3 ml-2 mr-2"></div>
<p></p>
@endforeach

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- The Close Button -->
  <span class="close">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="img01">

  <!-- Modal Caption (Image Text) -->
  <div id="caption"></div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
  // Get the modal
  var modal = document.getElementById('myModal');

  // Get the image and insert it inside the modal - use its "alt" text as a caption
  var img = $('.imgAllWorks');
  var modalImg = $("#img01");
  var captionText = document.getElementById("caption");
  $('.imgAllWorks').click(function(){
      modal.style.display = "block";
      var newSrc = this.src;
      modalImg.attr('src', newSrc);
      captionText.innerHTML = this.alt;
    });

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];
  var blackout = document.getElementById("myModal");

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  }
  blackout.onclick = function() {
    modal.style.display = "none";
  }
</script>

@endsection
