@extends('mainSiteMaster')
@section('content')

<div class="row mr-1 ml-1">
  <div class="col mb-2">
    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data"
     action="{{ action('ResumeController@update', 1) }}">
     {{ method_field('PUT') }}
     {{ csrf_field() }}

     <h1 class="text-center mt-2">Edit resume</h1>
     <!-- File input -->
     <div class="row mt-2">
       <div class="col">

         <div class="form-group">
           <label for="pdf_url">PDF file</label>
           <div class="input-group control-group" >
             <input type="file" name="pdf_file" class="form-control">
           </div>
         </div>
       </div>

       <div class="col">

         <div class="form-group">
           <label for="doc_url">DOC file</label>
           <div class="input-group control-group" >
             <input type="file" name="doc_file" class="form-control">
           </div>
         </div>
       </div>
     </div>

     <!-- Resume text -->
     <div class="row mt-2">
       <div class="col">

         <div class="form-group">
           <label for="resume">Resume</label>
           <textarea type="text" class="form-control" id="resume" name="resume"
            rows="20" cols="80">{{$data->resume_description}}</textarea><!--{ad{$data->resume_description}ad}-->
         </div>
       </div>

     </div>

     <!-- Buttons -->
     <div class="">
       <input type="submit" value="Save edit" class="btn btn-success">
       <div class="float-right">
         <a href="{{ action('ResumeController@index')}}"

         type="button" class="btn btn-danger">Discard</a>
       </div>
     </div>


    </form>
  </div>
</div>
@endsection
