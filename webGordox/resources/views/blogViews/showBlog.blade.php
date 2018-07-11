@extends('mainSiteMaster')

@section('content')

<!-- Add admin right here -->
@if (Auth::check() && Auth::user()->isAdmin())
<!-- Edit button -->
<div class="row">
  <div class="col mt-1">
    <button class="btn btn-outline-secondary float-right mr-2" type="button"
     onclick="location.href='/blog/edit/{{$blogData->id}}'" >Edit</button>
  </div>
</div>
@endif

<div class="row justify-content-center">

  <!-- Title -->
  <div class="col-9">

    <div class="">
      <h2>{{$blogData->title}}</h2>
      <p>
        {{substr($blogData->created_at,0, 10)}} -
        by: {{$blogData->title_description}} -
        Comments: {{sizeOf($blogData->comments)}}
      </p>
    </div>
    <!-- Title img -->
    <div class="headerImage">
      <img class="imgAllBlogs" src="{{URL::to('/image_files/blog_imgs/')}}/{{json_decode($blogData->img_url)[0]}}">
    </div>
  </div>

  <div class="w-100"></div>

  <!-- Content -->
  <div class="col-9">
    <p>
      <?php
        echo nl2br($blogData->long_description);
       ?>
    </p>
  </div>
  <div class="w-100"></div>


  <!-- Comment section -->
  <div class="col-9">
    <div class="border-bottom"></div>

    <div class="row ">

      <!-- Add comment here -->
      <div class="col">
        <form class="form-horizontal" role="form" method="POST" action="{{ action('CommentController@store') }}">
          {{ csrf_field() }}

          <div class="form-group">
            <label for="comment">Comment</label>
            <textarea type="text" class="form-control" name="comment"
             placeholder="Enter comment here" rows="3" cols="80"></textarea>
          </div>

          <div class="row">
            <div class="col">

              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Name">
              </div>
            </div>

            <div class="col">

              <div class="form-group">
                <label for="name">E-mail</label>
                <input type="text" class="form-control" name="email" placeholder="Enter e-mail">
              </div>

            </div>

            <div class="form-group hide">
              <input  class="form-control" type="number" name="id" value="{{$blogData->id}}">
            </div>

          </div>
          <input type="submit" value="Commit" class="btn btn-success">
        </form>
      </div>

      <div class="w-100"></div>

      <!-- All coments here -->
      <div class="col mt-2">
        <p>Comment section:</p>

        @foreach ($blogData->comments as $comment)
        <div class="row ml-5 mr-5">
          <div class="col Text_White">
            <div>{{$comment->name}} - {{substr($comment->created_at,0, 10)}}</div>
            <div class="mt-1 ml-2">{{$comment->comment}}</div>

            <!-- Add admin rights here -->
            @if (Auth::check() && Auth::user()->isAdmin())
            <form action="{{action('CommentController@destroy', $comment->id)}}" method="POST">
             {{ csrf_field() }}

             <input type="hidden" name="_method" value="DELETE">
             <button class="btn btn-danger float-right"
              type="submit"> Delete </button>
            </form>
            @endif

          </div>
        </div>
        <p></p>
        @endforeach


      </div>

    </div>
  </div>
</div>

@endsection
