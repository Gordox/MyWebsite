<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HobbyWorkController extends Controller
{


  public function index()
  {
    $viewData = new \stdClass();
    $viewData->title = "Hobby works";
    $viewData->controller = "HobbyWorkController";

    $hobbyworks = DB::table('works')->get();

    return view('ShowAllWorks',["viewData" => $viewData],["works" => $hobbyworks]);
  }

  public function create()
  {
    $controller = "HobbyWorkController";
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
