<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventAttendeesTable extends Migration

{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_attendees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            //rest of fields then...
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('event_id')->unsigned();
            //rest of fields then...
            $table->foreign('event_id')->references('id')->on('events');
            $table->integer('eventRole_id')->unsigned();
            //rest of fields then...
            $table->foreign('eventRole_id')->references('id')->on('event_roles');
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
        Schema::dropIfExists('event_attendees');
    }
}
