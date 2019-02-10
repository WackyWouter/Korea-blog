<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
Use App\Comment;
use App\User;
use App\Photo;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class ShowPostsController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');

  }

  public function index($slug){
    $user = Auth::user()->checkAdminRole('admin');


    // $post = DB::table('posts')->where('id', $id)->first();
    $post = Post::where('slug', $slug)->first();
    $id = $post->id;
    // $comments = DB::table('comments')->where('post_id', $id)->orderBy('created_at', 'ASC')->get();
    $comments = Comment::where('post_id', $id)->orderBy('created_at', 'ASC')->get();
    $photos = Photo::where('post_id', $id)->get();

    if($user != null){
      $role = $user->id;


      return view('post', ['post' => $post, 'photos' => $photos, 'comments' => $comments, 'role' => $role]);
    }
    else{
      return view('post', ['post' => $post, 'photos' => $photos, 'comments' => $comments]);
    }
  }
}
