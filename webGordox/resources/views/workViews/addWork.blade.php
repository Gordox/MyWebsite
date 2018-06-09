@extends ('mainSiteMaster')
@section('content')

@if (count($errors) > 0)
<div class="alert alert-danger">
  <strong>Whoops!</strong> There were some problems with your input.<br><br>
  <ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif
@if(session('success'))
<div class="alert alert-success">
  {{ session('success') }}
</div>
@endif


<div class="row">
  <div class="col pt-1">
    <h1 class="text-center bordet-bottom">Add new work</h1>
  </div>
</div>

<div class="row">
  <div class="col mb-2">
    @if($controller == 'HobbyWorkController')
      <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="{{ action('HobbyWorkController@store') }}">
    @else
      <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="{{ action('ProWorkController@store') }}">
    @endif
    {{ csrf_field() }}

    <div class="row">

      <div class="col">
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
        </div>
        <div class="form-group">
          <label for="tags">Tags</label>
          <input type="text" class="form-control" id="tags" name="tags" placeholder="Enter tags ex: C#, AI, PHP etc">
        </div>
      </div>

      <div class="col">
        <div class="row">

          <div class="col">
            <div class="form-group">
              <label for="work_type">Work type</label>
              <div>
                <input type="radio" name="work_type" value="hb" checked> Hobby work<br>
                <input type="radio" name="work_type" value="pro"> Proffesionall work<br>
                <input type="radio" name="work_type" value="doc"> Document/Paper<br>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label for="work_type">Have more info</label>
              <div>
                <input type="radio" name="has_more_info" value="true"> True<br>
                <input type="radio" name="has_more_info" value="false" checked> False<br>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label for="work_type">Has download url</label>
              <div>
                <input type="radio" name="has_download_url" value="true"> True<br>
                <input type="radio" name="has_download_url" value="false" checked> False<br>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="form-group">
      <label for="long_description">Long description</label>
      <textarea type="text" class="form-control" id="long_description" name="long_description"
       placeholder="Enter long description" rows="4" cols="80"></textarea>
    </div>

    <div class="form-group">
      <label for="short_description">Short description</label>
      <textarea type="text" class="form-control" id="short_description" name="short_description"
       placeholder="Enter short description" rows="2" cols="80"></textarea>
    </div>

    <!-- Image input -->
    <div class="form-group">

      <label for="img_url">Add images</label>
      <div class="input-group control-group increment" >
        <input type="file" name="filename[]" class="form-control">
          <div class="input-group-btn">
            <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
          </div>
      </div>

      <div class="clone hide">
        <div class="control-group input-group" style="margin-top:10px">
          <input type="file" name="filename[]" class="form-control">
            <div class="input-group-btn">
              <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
            </div>
        </div>
      </div>
    </div>

    <div class="form-group">
      <label for="vid_url">Video url</label>
      <input type="text" class="form-control" id="vid_url" name="vid_url" placeholder="Enter vid url">
    </div>

    <div class="form-group">
      <label for="download_url">Download url</label>
      <input type="text" class="form-control" id="download_url" name="download_url" placeholder="Enter download url">
    </div>



    <input type="submit" value="Save new work" class="btn btn-success">
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
