<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HobbyWorkController extends Controller
{
  public function index()
  {
    $title = "Hobby works";
    $hobbyworks = DB::table('works')->get();

    return view('ShowAllWorks',["title" => $title],["works" => $hobbyworks]);
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
