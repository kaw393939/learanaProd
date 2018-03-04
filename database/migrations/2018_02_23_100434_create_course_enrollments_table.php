<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseEnrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_enrollments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            //rest of fields then...
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('course_id')->unsigned();
            //rest of fields then...
            $table->foreign('course_id')->references('id')->on('courses');
            $table->integer('courseRole_id')->unsigned();
            //rest of fields then...
            $table->foreign('courseRole_id')->references('id')->on('course_roles');
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
        Schema::dropIfExists('course_enrollments');
    }
}
