<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!(Schema::hasTable('albums'))){
            Schema::create('albums', function(Blueprint $table){
                $table->increments('id');
                $table->string('title');
                $table->string('review');
                $table->date('release');
                $table->string('artist');
                $table->string('photo');
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
//        Schema::drop('albums');
    }
}
