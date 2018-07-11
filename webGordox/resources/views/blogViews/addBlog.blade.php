@extends ('mainSiteMaster')
@section('content')

<div class="row">
  <div class="col pt-2">
    <h1 class="text-center">Create blog page</h1>
  </div>
</div>

<div class="row mr-1 ml-1">
  <div class="col mb-2">
    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data"
     action="{{ action('BlogWorkController@store') }}">
    {{ csrf_field() }}

    <div class="row">
      <!-- Title and Tags-->
      <div class="col-5">

        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
        </div>

        <div class="form-group">
          <label for="tags">Tags</label>
          <input type="text" class="form-control" id="tags" name="tags" placeholder="Enter tags ex: C#, AI, PHP etc">
        </div>
      </div>

      <!-- Created by -->
      <div class="col-5">

        <div class="form-group">
          <label for="title">Created by</label>
          <input type="text" class="form-control" id="title_description" name="title_description" placeholder="Enter Aouther">
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
       placeholder="Enter short description" rows="2" cols="80"></textarea>
    </div>

    <!-- Long description -->
    <div class="form-group">
      <label for="long_description">In depth description</label>
      <textarea type="text" class="form-control" id="long_description" name="long_description"
       placeholder="Enter long description" rows="4" cols="80"></textarea>
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
      <input type="text" class="form-control" id="vid_url" name="vid_url" placeholder="Enter vid url">
    </div>

    <!-- Download URL -->
    <div class="form-group">
      <label for="download_url">Download url</label>
      <input type="text" class="form-control" id="download_url" name="download_url" placeholder="Enter download url">
    </div>

    <input type="submit" value="Save new blog" class="btn btn-success">
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
