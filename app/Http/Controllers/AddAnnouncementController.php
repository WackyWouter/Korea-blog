<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Announcement;

class AddAnnouncementController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index(){

    $announcement = Announcement::where('id', 1)->first();

    return view('addAnnouncement', ['announcement' => $announcement]);
  }
}
