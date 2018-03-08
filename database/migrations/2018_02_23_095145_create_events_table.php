<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->longText('description')->nullable();
            $table->integer('eventType_id')->unsigned();
            //rest of fields then...
            //  $table->foreign('eventType_id')->references('id')->on('event_types');
            $table->dateTimeTz('registrationOpen')->nullable($value = true);
            $table->dateTimeTz('registrationClose')->nullable($value = true);
            $table->boolean('publish')->default(false);
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
        Schema::dropIfExists('events');
    }
}
