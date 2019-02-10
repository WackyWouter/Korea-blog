<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index()
    {
      $photo = Photo::orderBy('created_at', 'DESC')->get();
      $photoTotal = Photo::count();



      return view('gallery', ['photos' => $photo, 'photoTotal' => $photoTotal]);
    }
}
