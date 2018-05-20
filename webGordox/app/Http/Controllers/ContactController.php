<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ContactController extends Controller
{
  public function index()
  {
    $title = "Contact";
    $anton = DB::table('anton')->where('name', 'Anton Svensson')->first();
    return view('Contact',["title" => $title], ["anton" => $anton]);
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
