<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Comment;
use App\Post;
use App\Photo;
use App\User;
use File;

class DeleteController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index($post_id, $id){
    $comment = Comment::find($id);
    $comment->delete();

    $post = Post::where('id', $post_id)->first();

    return redirect('/post/'.$post->slug);
  }

  public function post($id){
    $post = Post::where('id',$id)->first();
    $post->delete();

    return redirect('/dashboard');
  }

  public function photo($id){
    $photo = Photo::where('id',$id)->first();
    $name = $photo->name;
    Storage::delete('public/upload/'.$name);
    $photo->delete();


    return redirect('/dashboard');
  }

  public function user($id){
    $user = User::find($id);
    $user->delete();

    return redirect('/dashboard');
  }
}
