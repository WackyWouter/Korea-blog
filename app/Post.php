<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    public static function boot(){
      parent::boot();

      static::saving(function ($model) {
        $model->slug = str_slug($model->title);
      });
    }
      // The retrieved event will fire when an existing model is retrieved from the database. When a new model is saved for the first time, the creating and created events will fire. If a model already existed in the database and the save method is called, the updating / updated events will fire. However, in both cases, the saving / saved events will fire.
      // https://laracasts.com/discuss/channels/laravel/how-to-create-url-slugs-in-laravel


    public function users(){
      return $this -> belongsTo('App\User', 'user_id');
    }

    public function comments(){
      return $this -> hasMany('App\Comment');
    }

    public function photos(){
      return $this -> hasMany('App\Photo');
    }

}
