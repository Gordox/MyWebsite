@extends('mainSiteMaster')

@section('content')

<div class="row">
  <div class="col pt-2">
    <h1 class="text-center">Edit blog </h1>
  </div>
</div>

<div class="row mr-1 ml-1">
  <div class="col mb-2 ">
    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data"
     action="{{ action('BlogWorkController@update', $blogData->id) }}">
    {{ method_field('PUT') }}
    {{ csrf_field() }}

    <div class="row">
      <!-- Title and Tags-->
      <div class="col-5">

        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title" value="{{$blogData->title}}">
        </div>

        <div class="form-group">
          <label for="tags">Tags</label>
          <input type="text" class="form-control" id="tags" name="tags" value="{{$blogData->tags}}">
        </div>
      </div>

      <!-- Created by -->
      <div class="col-5">

        <div class="form-group">
          <label for="title">Created by</label>
          <input type="text" class="form-control" id="title_description" name="title_description" value="{{$blogData->title_description}}">
        </div>
      </div>

      <!-- has download url -->
      <div class="col-2">
        <div class="form-group">
          <label for="work_type">Has download url</label>
          <div class="ml-2">
            <input type="radio" name="has_download_url" value="true"> True<br>
            <input type="radio" name="has_download_url" value="false" checked> False<br>
          </div>
        </div>
      </div>

    </div>

    <!-- Short description -->
    <div class="form-group">
      <label for="short_description">Front page description</label>
      <textarea type="text" class="form-control" id="short_description" name="short_description"
       rows="2" cols="80">{{$blogData->short_description}}</textarea>
    </div>

    <!-- Long description -->
    <div class="form-group">
      <label for="long_description">In depth description</label>
      <textarea type="text" class="form-control" id="long_description" name="long_description"
       rows="4" cols="80">{{$blogData->long_description}}</textarea>
    </div>

    <!-- Image input -->
    <div class="form-group">

      <label for="img_url">Add images</label>
      <h4>Title img: max 825x150 or leave empty for default img</h4>
      <div class="input-group control-group" >
        <input type="file" name="filename[]" class="form-control">
          <div class="input-group-btn">
            <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
          </div>
      </div>
      <h4>Content img below (press add)</h4>
      <div class="increment"></div>
      <div class="clone hide">
        <div class="control-group input-group" style="margin-top:10px">
          <input type="file" name="filename[]" class="form-control">
            <div class="input-group-btn">
              <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
            </div>
        </div>
      </div>
    </div>

    <!-- Video URL -->
    <div class="form-group">
      <label for="vid_url">Video url</label>
      <input type="text" class="form-control" id="vid_url" name="vid_url" value="{{$blogData->vid_url}}">
    </div>

    <!-- Download URL -->
    <div class="form-group">
      <label for="download_url">Download url</label>
      <input type="text" class="form-control" id="download_url" name="download_url" value="{{$blogData->download_url}}">
    </div>

    <div>
      <input type="submit" value="Save new blog" class="btn btn-success">
    </div>

   </form>
   <form action="{{action('BlogWorkController@destroy', $blogData->id)}}" method="POST">
    {{ csrf_field() }}

    <input type="hidden" name="_method" value="DELETE">
    <button class="btn btn-danger float-right"
     type="submit"> Delete </button>
   </form>

  </div>
</div>

<script type="text/javascript">


    $(document).ready(function() {

      $(".btn-success").click(function(){
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){
          $(this).parents(".control-group").remove();
      });

    });
</script>


@endsection


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
