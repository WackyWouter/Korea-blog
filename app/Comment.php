<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    public function users(){
      return $this -> belongsTo('App\User', 'user_id');
    }

    public function posts(){
      return $this -> belongsTo('App\Post', 'post_id');
    }

}
