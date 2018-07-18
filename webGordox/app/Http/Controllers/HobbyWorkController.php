<?php

namespace App\Http\Controllers;

use App\Work;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HobbyWorkController extends Controller
{


  public function index()
  {

    $viewData = new \stdClass();
    $viewData->title = "Hobby works";
    $viewData->controller = "HobbyWorkController";
    $viewData->editDir = "hobby-works";

    $hobbyworks = DB::table('works')->where('work_type', 'hb')->orderBy('created_at', 'desc')->get();

    /*  $test = json_decode($hobbyworks, true);
    echo '<pre>' . print_r($test, true) . '</pre>'; */

    return view('workViews/ShowAllWorks',["viewData" => $viewData],["works" => $hobbyworks]);
  }

  public function create()
  {
    $controller = "HobbyWorkController";
    return view('workViews/addWork',["controller" => $controller]);
  }

  public function store(Request $request)
  {
    $this->validate($request, [

                'filename' => 'required',
                'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

    $newWork = new Work();
    $newWork->work_type         = $request->work_type;
    $newWork->title             = $request->title;
    $newWork->long_description  = $request->long_description;
    $newWork->short_description = $request->short_description;
    $newWork->tags              = $request->tags;
    if($request->has_more_info == "true"){
      $newWork->has_more_info     = false;
    }
    else {
      $newWork->has_more_info     = true;
    }

    if($request->has_download_url == "true"){
      $newWork->has_download_url     = false;
    }
    else {
      $newWork->has_download_url     = true;
    }
    if($request->on_slider == "true"){
      $newWork->on_slider     = true;
    }
    else {
      $newWork->on_slider     = false;
    }
    $newWork->img_url           = $request->img_url;
    $newWork->vid_url           = $request->vid_url;
    $newWork->download_url      = $request->download_url;

    if($request->hasfile('filename'))
    {
      foreach($request->file('filename') as $image)
      {
        $name=$image->getClientOriginalName();
        $image->move(public_path().'/image_files/work_imgs/', $name);
        $data[] = $name;
      }
    }
    $newWork->img_url= json_encode($data);
    $newWork->save();

    return redirect()->action('HobbyWorkController@index');
  }

  public function show($id)
  {
    $hobbyworks = DB::table('works')->find($id);

    return view('workViews/showWork', ["hobbyworks" => $hobbyworks]);
  }

  public function edit($id)
  {
    $hobbyworks = DB::table('works')->find($id);
    $controller = "HobbyWorkController";
    return view('workViews/editWork', ["work" => $hobbyworks],["controller" => $controller]);
  }

  public function update(Request $request, $id)
  {
    $this->validate($request, [
                'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

    $work = Work::find($request->id);
    $work->work_type         = $request->work_type;
    $work->title             = $request->title;
    $work->long_description  = $request->long_description;
    $work->short_description = $request->short_description;
    $work->tags              = $request->tags;
    if($request->has_more_info == "true"){
      $work->has_more_info     = false;
    }
    else {
      $work->has_more_info     = true;
    }

    if($request->has_download_url == "true"){
      $work->has_download_url     = false;
    }
    else {
      $work->has_download_url     = true;
    }
    if($request->on_slider == "true"){
      $work->on_slider     = true;
    }
    else {
      $work->on_slider     = false;
    }
    $work->vid_url           = $request->vid_url;
    $work->download_url      = $request->download_url;

    if($request->hasfile('filename'))
    {
      //Delete the old imgs that is stored img folder


      //Add the new imgs
      foreach($request->file('filename') as $image)
      {
        $name=$image->getClientOriginalName();
        $image->move(public_path().'/image_files/work_imgs/', $name);
        $data[] = $name;
      }
      $work->img_url= json_encode($data);
    }
    $work->save();

    return redirect()->action('HobbyWorkController@index');
  }

  public function destroy($id)
  {
    $work = Work::find($id);
    $work->delete();
    return redirect()->action('HobbyWorkController@index');
  }
}
