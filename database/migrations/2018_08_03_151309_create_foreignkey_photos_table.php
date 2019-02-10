<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignkeyPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::table('photos', function ($table) {
             $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
         });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         schema::table('photos', function ($table){
           $table->dropForeign(['post_id']);
         });
     }
}
