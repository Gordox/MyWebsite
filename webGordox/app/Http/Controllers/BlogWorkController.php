<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Blog;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BlogWorkController extends Controller
{
  public function index()
  {
    $viewData = new \stdClass();
    $viewData->title = "Blog";

    $blogData = Blog::with('comments')->orderBy('created_at', 'desc')->get();

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
    $blogData = Blog::with('comments')->find($id);
    //$blogData = DB::table('blogs')->find($id);
    return view('blogViews/showBlog', ["blogData" => $blogData]);
  }

  public function edit($id)
  {
    $blogData = DB::table('blogs')->find($id);
    return view('blogViews/editBlog', ["blogData" => $blogData]);
  }

  public function update(Request $request, $id)
  {
    $this->validate($request, [
      'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048']);

    $blog = Blog::find($request->id);
    $blog->title =             $request->title;
    $blog->title_description = $request->title_description;
    $blog->long_description =  $request->long_description;
    $blog->short_description = $request->short_description;
    $blog->tags =              $request->tags;
    $blog->vid_url =           $request->vid_url;
    $blog->download_url =      $request->download_url;

    if($request->has_download_url == "true")
      $blog->has_download_url     = false;
    else
      $blog->has_download_url     = true;

    if($request->hasfile('filename'))
    {
      foreach($request->file('filename') as $image)
      {
        $name=$image->getClientOriginalName();
        $image->move(public_path().'/image_files/blog_imgs/', $name);
        $data[] = $name;
      }
        $blog->img_url= json_encode($data);
    }
    else{ $blog->img_url = 'none';}

    $blog->save();

    return redirect()->action('BlogWorkController@index');
  }

  public function destroy($id)
  {
    $blog = Blog::with('comments')->find($id);
    foreach ($blog->comments as $key => $comment) {
      Comment::find($comment->id)->delete();
    }
    $blog->delete();
    return redirect()->action('BlogWorkController@index');
  }
}
