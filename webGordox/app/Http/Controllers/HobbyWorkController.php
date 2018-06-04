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

    $hobbyworks = DB::table('works')->where('work_type', 'hb')->get();

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
    if($request->has_more_info == "True"){
      $newWork->has_more_info     = true;
    }
    else {
      $newWork->has_more_info     = false;
    }

    if($request->has_download_url == "True"){
      $newWork->has_download_url     = true;
    }
    else {
      $newWork->has_download_url     = false;
    }
    $newWork->img_url           = $request->img_url;
    $newWork->vid_url           = $request->vid_url;
    $newWork->download_url      = $request->download_url;

    if($request->hasfile('filename'))
    {
      foreach($request->file('filename') as $image)
      {
        $name=$image->getClientOriginalName();
        $image->move(resource_path().'/image_files/work_imgs/', $name);
        $data[] = $name;
      }
    }
    $newWork->img_url=json_encode($data);
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

    return view('workViews/editWork', ["hobbyworks" => $hobbyworks]);
  }

  public function update()
  {

  }

  public function destroy()
  {

  }
}
