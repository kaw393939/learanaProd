<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->integer('user_id')->unsigned()->unique()->primary('id');
            //rest of fields then...
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('title');
            $table->string('body')->nullable();
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->date('birthday')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
