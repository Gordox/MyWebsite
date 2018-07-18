@extends('mainSiteMaster')

@section('content')

<div class="row justify-content-center">
  <div class="col-12 mt-2 mr-3">
    @if (Auth::check() && Auth::user()->isAdmin())
    <button class="btn btn-outline-secondary float-right" type="button"
     onclick="location.href='/resume/edit'"> Edit resume</button>
    @endif
  </div>
  <div class="col-9 mt-2 Text_White FontSize_18">
    <p class="text-center">
      Download:
      <a class="Text_White" href="{{URL::to('/document_files')}}/{{$data->pdf_file}}">pdf</a>
      <a class="Text_White" href="{{URL::to('/document_files')}}/{{$data->doc_file}}">doc</a><br>
      adwwd
    </p>

    <div id="resumeStyle">
      <?php
        echo ($data->resume_description);
       ?>
    </div>


  </div>
</div>


@endsection
