<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**

    * @param string | array $roles

    */

    public function authorizeRoles($roles){

      if (is_array($roles)){
        return $this -> hasAnyRoles($roles) || abort(401, "This action is unauthorized.");
      }

      return $this -> hasRole($roles) || abort(401, 'This action is unauthorized.');
    }

    public function checkAdminRole($role){

      return $this -> roles() -> where('name', $role) -> first();
      // return $this -> role == $role;
    }

    /**

    * Check multiple roles

    * @param array $roles

    */

    public function hasAnyRoles($roles){
      return null !== $this -> roles() -> whereIn('name', $roles) -> first();
    }

    /**

    * Check one roles

    * @param string $roles

    */

    public function hasRole($role){
      return null !== $this -> roles() -> where('name', $role) -> first();
    }

    public function posts(){
      return $this -> hasMany('App\Post');
    }

    public function photos(){
      return $this -> hasMany('App\Photo');
    }

    public function comments(){
      return $this -> hasMany('App\Comment');
    }

    public function roles(){
      return $this->belongsToMany(Role::class);
    }

    public function rolesPivot(){
      return $this->belongsToMany(Role::class)->withPivot('role_id');
    }
}
