<?php

namespace App\Http\Controllers;

use App\Work;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProWorkController extends Controller
{
  public function index()
  {
    $viewData = new \stdClass();
    $viewData->title = "Professional works";
    $viewData->controller = "ProWorkController";

    $proworks = DB::table('works')->get();

    return view('workViews/ShowAllWorks',["viewData" => $viewData],["works" => $proworks]);
  }

  public function create()
  {
    $controller = "ProWorkController";
    return view('workViews/addWork',["controller" => $controller]);
  }

  public function store(Request $request)
  {
    $newWork = new  Work();
    $newWork->work_type         = $request->work_type;
    $newWork->title             = $request->title;
    $newWork->long_description  = $request->long_description;
    $newWork->short_description = $request->short_description;
    $newWork->tags              = $request->tags;
    $newWork->img_url           = $request->img_url;
    $newWork->vid_url           = $request->vid_url;
    $newWork->download_url      = $request->download_url;
    $newWork->save();

    return redirect()->action('ProWorkController@index');

  }

  public function show()
  {

  }

  public function edit()
  {

  }

  public function update()
  {

  }

  public function destroy()
  {

  }
}
