<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class IndexController extends Controller
{
  public function index()
  {
    $viewData = new \stdClass();
    $viewData->anton = DB::table('antons')->find(1); //Change to a JSON file later
    $viewData->slidershow = DB::table('works')->where('on_slider', '1')->orderBy('created_at', 'desc')->get();

    $works = DB::table('works')->orderBy('created_at', 'desc')->limit(5)->get();

    return view('index', ["viewData" => $viewData],["works" => $works]);
  }

  public function create()
  {

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
