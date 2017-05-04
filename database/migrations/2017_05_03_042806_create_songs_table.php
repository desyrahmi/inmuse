<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!(Schema::hasTable('songs'))){
            Schema::create('songs', function(Blueprint $table){
                $table->increments('id');
                $table->string('name');
                $table->string('duration');
                $table->integer('album_id')->unsigned();
                $table->foreign('album_id')->references('id')->on('albums');
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
