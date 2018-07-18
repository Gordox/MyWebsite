<?php

namespace App\Http\Controllers;

use App\Resume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResumeController extends Controller
{
  public function index()
  {
    $data = Resume::find(1);
    return view('resume', ["data" => $data]);
  }



  public function edit()
  {
    $data = Resume::find(1);
    return view('editResume', ["data" => $data]);
    //return view('editResume');
  }

  public function update(Request $request)
  {
    $resume = Resume::find(1);

    $resume->resume_description = $request->resume;

    //PDF
    if($request->hasfile('pdf_file'))
    {
      $name = $request->pdf_file->getClientOriginalName();
      $request->pdf_file->move(public_path().'/document_files', $name);
      $resume->pdf_file = $name;
    }

    //Doc
    if($request->hasfile('doc_file'))
    {
      $name = $request->doc_file->getClientOriginalName();
      $request->doc_file->move(public_path().'/document_files', $name);
      $resume->doc_file = $name;
    }

    $resume->save();

    return redirect()->action('ResumeController@index');

  }

  public function destroy()
  {

  }
}
