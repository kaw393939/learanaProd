<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            //rest of fields then...
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('courseType_id')->unsigned();
            //rest of fields then...
            $table->foreign('courseType_id')->references('id')->on('course_types');
            $table->string('title');
            $table->longText('description');
            $table->boolean('publish')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
