<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignkeyPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
      public function up()
      {
          Schema::table('posts', function ($table) {
              $table->foreign('user_id')->references('id')->on('users');
          });
      }

      /**
       * Reverse the migrations.
       *
       * @return void
       */
      public function down()
      {
          schema::table('posts', function ($table){
            $table->dropForeign(['user_id']);
          });
      }
}
