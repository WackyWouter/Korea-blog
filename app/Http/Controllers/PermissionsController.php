<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Role;
use Input;

class PermissionsController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index(){

    $users = User::all();

    return view('permissions', ['users' => $users]);
  }

  public function save(){
    $user_id_array = Input::get('user_id');
    $role_array = Input::get('role');
    $count = User::count();
    $error = 'This action could not be completed at this time. Please contact the owner of this website.';



    for ($i=0; $i < $count; $i++) {

      if($role_array[$i] == 'viewer'){
        DB::table('role_user')->where('user_id', $user_id_array[$i])->update(['role_id'=>1]);
      }
      else if($role_array[$i] == 'admin'){
        DB::table('role_user')->where('user_id', $user_id_array[$i])->update(['role_id'=>2]);
      }
      else{
        return view('errors/basicError', ['error' => $error]);
      }

    };

    return redirect("/dashboard");
  }
}
