<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
  public function index()
  {
    $title = "Contact";

    return view('Contact',["title" => $title]);
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
