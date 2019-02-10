<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Input;

class ManagePostsController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index(){
    $posts = Post::orderBy('created_at', 'DESC')->get();

    return view('managePosts', ['posts'=> $posts]);
  }

  public function update(){
    $post_id_array = Input::get('post_id');
    $title_array = Input::get('title');
    $count = Post::count();

    for ($i=0; $i < $count; $i++) {
      $post = Post::where('id', $post_id_array[$i])->first();
      $post->title = $title_array[$i];
      $post->save();
    }

    return redirect("/dashboard");
  }
}
