<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!(Schema::hasTable('users'))){
            Schema::create('users', function(Blueprint $table){
                $table->increments('id');
                $table->string('name');
                $table->string('username')->unique();
                $table->string('phone')->nullable();
                $table->string('email')->unique();
                $table->string('password');
                $table->rememberToken();
                $table->string('role');
                $table->integer('photo_id')->unsigned()->nullable();
                $table->foreign('photo_id')->references('id')->on('photos');
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
