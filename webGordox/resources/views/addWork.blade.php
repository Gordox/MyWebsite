@extends ('mainSiteMaster')
@section('content')

<div class="row">
  <div class="col pt-1">
    <h1 class="text-center bordet-bottom">Add new work</h1>
  </div>
</div>

<div class="row">
  <div class="col mb-2">
    <form class="form-horizontal" role="form" method="POST" action="{{ action('HobbyWorkController@store') }}">

      <div class="form-group">
        <label for="work_type">Work type</label>
        <input type="text" class="form-control" id="work_type" name="work_type"
              placeholder="Enter work type [hb, pro, doc]">
      </div>

      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
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

      <div class="form-group">
        <label for="tags">Tags</label>
        <input type="text" class="form-control" id="tags" name="tags" placeholder="Enter tags ex: C#, AI, PHP etc">
      </div>

      <div class="form-group">
        <label for="img_url">Image url</label>
        <input type="text" class="form-control" id="img_url" name="img_url" placeholder="Enter img url">
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

@endsection
