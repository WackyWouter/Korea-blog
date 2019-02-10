<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class AccountController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index(){
    $user = Auth::user();

    return view('account', ['user' => $user]);


  }

  public function update(Request $request){

    $email = $request->email;
    $password = $request->changePassword;
    $maillist = $request->changeMeldingen;

    $user = Auth::user();
    $user->onMailingList = $maillist;
    $user->email = $email;
    $user->password =  bcrypt($password);
    $user->save();


    return redirect('/home');



  }


}
