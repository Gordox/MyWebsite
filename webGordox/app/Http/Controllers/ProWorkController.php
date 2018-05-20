<?php

namespace App\Http\Controllers;

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

    return view('ShowAllWorks',["viewData" => $viewData],["works" => $proworks]);
  }

  public function create()
  {
    $controller = "ProWorkController";
    return view('addWork',["controller" => $controller]);
  }

  public function store()
  {

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
