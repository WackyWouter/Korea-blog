<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignkeyCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::table('comments', function ($table) {
          $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
          $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');;
         });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         schema::table('comments', function ($table){
           $table->dropForeign(['user_id']);
           $table->dropForeign(['post_id']);
         });
     }
}
