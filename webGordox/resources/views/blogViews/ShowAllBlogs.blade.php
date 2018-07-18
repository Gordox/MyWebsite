@extends('mainSiteMaster')

@section('content')

<!-- Page title and add button -->
<div class="row">
  <div class="col ml-2">
    <h2>{{$viewData->title}}</h2>
  </div>
  @if (Auth::check() && Auth::user()->isAdmin())
  <div class="col mt-1 mr-2">
    <button class="btn btn-outline-secondary float-right" type="button"
     onclick="location.href='/blog/create'">Add blog page</button>
  </div>
  @endif
</div>

<div class="row">
  <!--Left side-->
  <div class="col-9">

    @foreach($blogData as $blog)
    <!--Content-->
    <div class="ml-3 mr-1">
      <h2>{{$blog->title}}</h2>
      <h6>
        {{substr($blog->created_at,0, 10)}}
         By: {{$blog->title_description}},
         Comments: {{sizeOf($blog->comments)}}
      </h6>

      <div class="headerImage">
        <img class="imgAllBlogs" src="{{URL::to('/image_files/blog_imgs/')}}/{{json_decode($blog->img_url)[0]}}"
         alt="">
      </div>

      <!--Main content here-->
      <div class="row mt-2">

        <div class="col-sm-10">
          <p><?php echo nl2br($blog->short_description);?></p>
        </div>
        <div class="col-sm-2">
        @if (Auth::check() && Auth::user()->isAdmin())
          <button class="btn btn-outline-secondary mb-1" type="button"
           onclick="location.href='/blog/edit/{{$blog->id}}'" >Edit</button>
        @endif
          <button class="btn btn-outline-secondary mb-1" type="button"
           onclick="location.href='/blog/show/{{$blog->id}}'" >Read more</button>
        </div>
      </div>

      <!--Style-->
      <div class="border-bottom"></div>
      <p></p>
    </div>
    @endforeach

  </div>

  <!--Right side-->
  <div class="col-3 border-left">
    <div class="ml-1 mr-1">
      <h2 class="text-center border-bottom"></h2>
      <ul style="list-style-type: none;">
        <li></li>

      </ul>
    </div>
  </div>
</div>
@endsection
