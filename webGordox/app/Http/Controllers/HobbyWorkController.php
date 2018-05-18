<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HobbyWorkController extends Controller
{
  public function index()
  {
    $title = "Hobby projects";
    $hobbyworks = DB::table('works')->where('work_type', 'hb')->get();

    return view('works',["title" => $title],["hobbyworks" => $hobbyworks]);
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
