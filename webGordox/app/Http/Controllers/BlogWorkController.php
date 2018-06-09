<?php

namespace App\Http\Controllers;

    use App\Blog;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BlogWorkController extends Controller
{
  public function index()
  {
    $viewData = new \stdClass();
    $viewData->title = "Blog";

    $blogData = DB::table('blogs')->get();

    return view('blogViews/ShowAllBlogs',["viewData" => $viewData], ["blogData" => $blogData]);
  }

  public function create()
  {
    return view('blogViews/addBlog');
  }

  public function store(Request $request)
  {
    $this->validate($request, [

                'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

    $newBlog = new Blog();
    $newBlog->title =             $request->title;
    $newBlog->title_description = $request->title_description;
    $newBlog->long_description =  $request->long_description;
    $newBlog->short_description = $request->short_description;
    $newBlog->tags =              $request->tags;
    $newBlog->vid_url =           $request->vid_url;
    $newBlog->download_url =      $request->download_url;

    if($request->has_download_url == "true")
      $newBlog->has_download_url     = false;
    else
      $newBlog->has_download_url     = true;

    if($request->hasfile('filename'))
    {
      foreach($request->file('filename') as $image)
      {
        $name=$image->getClientOriginalName();
        $image->move(public_path().'/image_files/blog_imgs/', $name);
        $data[] = $name;
      }
      $newBlog->img_url= json_encode($data);
    }
    else{ $newBlog->img_url = 'none';}

    $newBlog->save();

    return redirect()->action('BlogWorkController@index');
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
