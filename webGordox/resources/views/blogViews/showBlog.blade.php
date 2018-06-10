@extends('mainSiteMaster')

@section('content')

<!-- Add admin right here -->
<!-- Edit button -->
<div class="row">
  <div class="col mt-1">
    <button class="btn btn-primary float-right" type="button"
     onclick="location.href='/blog/edit/{{$blogData->id}}'" >Edit</button>
  </div>
</div>

<div class="row justify-content-center">

  <!-- Title -->
  <div class="col-9">

    <div class="">
      <h2>{{$blogData->title}}</h2>
      <p>
        {{substr($blogData->created_at,0, 10)}} -
        by: {{$blogData->title_description}} -
        Comments: 0
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

    <div class="row">

      <!-- Add commetn here -->
      <div class="col">
        <form class="form-horizontal" role="form" method="POST" action="{{ action('BlogWorkController@store') }}">
          {{ csrf_field() }}

          <div class="form-group">
            <label for="comment">Comment</label>
            <textarea type="text" class="form-control" id="short_description" name="short_description"
             placeholder="Enter comment here" rows="3" cols="80"></textarea>
          </div>

          <div class="row">
            <div class="col">

              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
              </div>
            </div>

            <div class="col">

              <div class="form-group">
                <label for="name">E-mail</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
              </div>

            </div>
          </div>
          <input type="submit" value="Commit" class="btn btn-success">
        </form>
      </div>

      <div class="w-100"></div>

      <!-- All coments here -->
      <div class="col mt-2">
        <p>Comment section:</p>
      </div>

    </div>
  </div>
</div>

@endsection
