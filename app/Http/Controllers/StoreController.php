<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use App\Photo;
use Auth;
use Mail;
use App\Mail\SendMail;
use App\Mail\CommentMail;
use App\Mail\AnnouncementMail;
use App\Post;
use App\Comment;
use App\Announcement;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index(Request $request){


    if ($request->hasFile('file')){
      $amount;

      try {

        foreach ($request->file as $file) {
          $name = $file->getClientOriginalName();
          $bytes = $file->getClientSize();

          $file->storeAs('public/upload', $name);


          //convert size to a readable format

          $units = array('B', 'KB', 'MB', 'GB', 'TB');
          $bytes = max($bytes, 0);
          $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
          $pow = min($pow, count($units) - 1);
          $bytes /= pow(1024, $pow);
          $size = round($bytes, 2) . ' ' . $units[$pow];


          $photos = new Photo;
          $photos->name = $name;
          $photos->size = $size;
          $photos->save();
          global $amount;
          $amount = $amount. ", " .$name;


        }

      } catch (\Illuminate\Database\QueryException $e) {
        $errorCode = $e->errorInfo[1];
        global $amount;
        if($errorCode == 1062){
          return view('errors/basicError', ['error' => 'Duplicate entry error. Files that succeeded: '.$amount ]);
        }
      }
    }else{
      return view('errors/basicError', ['error' => 'No file was detected.' ]);
    }

    return redirect('/dashboard');


  }

  public function storePost(Request $request){

    $id = Auth::user()->id;

    $post = new Post;
    $post->title = $request->title;
    $post->intro = $request->intro;
    $post->text = $request->text;
    $post->user_id = $id;
    $post->save();
    Mail::send(new SendMail());



    if ($request->hasFile('file')){
      $amount;

      try {

        foreach ($request->file as $file) {
          $name = $file->getClientOriginalName();
          $bytes = $file->getClientSize();

          $file->storeAs('public/upload', $name);

          //convert size to a readable format

          $units = array('B', 'KB', 'MB', 'GB', 'TB');
          $bytes = max($bytes, 0);
          $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
          $pow = min($pow, count($units) - 1);
          $bytes /= pow(1024, $pow);
          $size = round($bytes, 2) . ' ' . $units[$pow];

          $post = Post::where('title', $request->title)->first();

          $post_id = $post->id;

          $photos = new Photo;
          $photos->name = $name;
          $photos->size = $size;
          $photos->post_id = $post_id;
          $photos->save();
          global $amount;
          $amount = $amount. ", " .$name;


        }

      } catch (\Illuminate\Database\QueryException $e) {
        $errorCode = $e->errorInfo[1];
        global $amount;
        global $postUpload;

        if($errorCode == 1062){
          return view('errors/basicError', ['error' => 'Duplicate entry error. Photos that succeeded: ' . $amount ]);
        }
      }
    }

    return redirect('/dashboard');
  }







  public function storeComment($post_id){
    $input = Input::get('comment');

    $id = Auth::user()->id;
    $comment = new Comment;
    $comment->text = $input;
    $comment->user_id = $id;
    $comment->post_id = $post_id;
    $comment->save();

    $post = Post::where('id', $post_id)->first();

    Mail::send(new CommentMail());

    return redirect("/post/".$post->slug);
  }

  public function storeAnnouncement(){
    $input = Input::get('announcement');

    $announcement = Announcement::where("id", 1)->first();
    $announcement->text = $input;
    $announcement->save();

    Mail::send(new AnnouncementMail());

    return redirect('/dashboard');
  }

}
