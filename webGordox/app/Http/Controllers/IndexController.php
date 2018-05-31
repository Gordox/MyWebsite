<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class IndexController extends Controller
{
  public function index()
  {
    $anton = DB::table('anton')->where('name', 'Anton Svensson')->first(); //Change to a JSON file later
    $works = DB::table('works')->get();

    return view('index', ["anton" => $anton],["works" => $works]);
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
