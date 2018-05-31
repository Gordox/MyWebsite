<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BlogWorkController extends Controller
{
  public function index()
  {
    $title = "Blog";

    return view('blogViews/ShowAllBlogs',["title" => $title]);
  }

  public function create()
  {
    return view('blogViews/addBlog');
  }

  public function store()
  {

  }

  public function show($id)
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
