<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!(Schema::hasTable('reviews'))){
            Schema::create('reviews', function(Blueprint $table){
                $table->increments('id');
                $table->integer('rating');
                $table->string('comment');
                $table->integer('album_id')->unsigned();
                $table->foreign('album_id')->references('id')->on('albums');
                $table->integer('user_id')->unsigned();
                $table->foreign('user_id')->references('id')->on('users');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
