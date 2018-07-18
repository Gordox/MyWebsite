<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{

  public function create($id)
  {
    //return view('createReview', ['product_id' => $id]);
  }

  public function store(Request $request)
  {
    $newComment = new Comment;
    $newComment->blog_id = $request->id;
    $newComment->name = $request->name;
    $newComment->email = $request->email;
    $newComment->comment = $request->comment;

    $newComment->save();

    return redirect()->action('BlogWorkController@show', $request->id);
  }

  public function destroy($id)
  {
    $comment = Comment::find($id);
    $comment->delete();
    return redirect()->action('BlogWorkController@show', $comment->blog_id);
  }
}
