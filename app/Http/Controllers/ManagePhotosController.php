<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\Post;

class ManagePhotosController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index(){

    $photos = Photo::orderBy('created_at', 'DESC')->get();

    return view('managePhotos', ['photos'=> $photos]);
  }

  public function update(Request $request){
    $post_id_array = $request->post_id;
    $id_array = $request->id;

    foreach ($id_array as $index => $id) {

      $post = Post::where('id', $post_id_array[$index])->first();

      if ($post_id_array[$index] == '0') {
        $photo = Photo::where('id', $id)->first();
        $photo->post_id = null;
        $photo->save();
      }
      else if($post_id_array[$index] == null){
        continue;
      }
      else if($post_id_array[$index] > 0 && $post != null ){

        $photo = Photo::where('id', $id)->first();
        $photo->post_id = $post_id_array[$index];
        $photo->save();

      }else{

        return view('errors/basicError', ['error' => 'Number was not a post id' ]);

      }



    }
    return redirect('/dashboard');
  }
}
