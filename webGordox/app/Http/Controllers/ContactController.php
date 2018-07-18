<?php

namespace App\Http\Controllers;

use App\Http\Controllers\File;
use App\Anton;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
  public function index()
  {
    $viewData = new \stdClass();
    $viewData->title = "Contact";
    $viewData->mailSRC =    '/image_files/etc_imgs/Icons/mail.png';
    $viewData->linkInSRC =  '/image_files/etc_imgs/Icons/linkIn.png';
    $viewData->twitterSRC = '/image_files/etc_imgs/Icons/Twitter_Icon.png';
    $viewData->youTubeSRC = '/image_files/etc_imgs/Icons/youtube_Icon.png';
    $viewData->gitHubSRC =  '/image_files/etc_imgs/Icons/GitHub.png';

    $anton = Anton::find(1);
    return view('Contact',["viewData" => $viewData], ["anton" => $anton]);
  }

  public function edit()
  {
    $anton = Anton::find(1);

    return view('otherViews/editMyInfo',["anton" => $anton]);
  }

  public function update(Request $request)
  {
    $this->validate($request, [
      'imageFile.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048']);

    $anton = Anton::find(1);
    $anton->name =        $request->name;
    $anton->description = $request->description;
    $anton->age =         $request->age;
    $anton->code_tags =   $request->code_tags;
    $anton->location =    $request->location;
    $anton->email =       $request->email;

    if($request->hasfile('imageFile'))
    {
      $oldImgPath = public_path().'/image_files/etc_imgs/me/'.$anton->img_url;
      if(file_exists($oldImgPath)){
        unlink($oldImgPath);
      }
      $name=$request->imageFile->getClientOriginalName();
      $request->imageFile->move(public_path().'/image_files/etc_imgs/me', $name);
      $anton->img_url = $name;
    }

    $anton->save();

    return redirect()->action('ContactController@index');
  }

  public function destroy()
  {

  }
}
