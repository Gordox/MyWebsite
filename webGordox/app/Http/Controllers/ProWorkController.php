<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProWorkController extends Controller
{
  public function index()
  {
    $title = "Professional work";
    $proworks = DB::table('works')->get();

    return view('ShowAllWorks',["title" => $title],["works" => $proworks]);
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
