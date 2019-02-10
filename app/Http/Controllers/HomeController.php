<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Announcement;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->checkAdminRole('admin');
        $announcement = Announcement::where('id', 1)->first();


        $postsQuery = Post::orderBy('created_at', 'DESC')->get();
        // $posts = array();
        //
        // foreach($postsQuery as $postsItem){
        //   dd(!empty($postsItem->photos));
        //
        //
        //
        //   array_push($posts,$postsItem);
        // }

        if($user != null){
          $role = $user->id;

          return view('home', ['posts' => $postsQuery, 'announcement' => $announcement, 'role' => $role]);

        }
        else{

          return view('home', ['posts' => $postsQuery, 'announcement' => $announcement]);
        }
    }
}
