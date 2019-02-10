<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['size', 'name', 'post_id'];


    public function users(){
      return $this -> belongsTo('App\User', 'user_id');
    }

    public function posts(){
      return $this -> belongsTo('App\Post', 'post_id');
    }


}
