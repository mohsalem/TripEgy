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
            $table->string('name');
            $table->integer('company_id')->unsigned();
            // $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            $table->string('category');
            $table->string('description');
            $table->datetime('from');
            $table->datetime('to');
            $table->datetime('deadline_date');
            $table->string('location');
            $table->string('location_name');
            $table->string('facility');
            $table->string('photo');
            $table->string('max_bookings');
            $table->integer('visibility')->default(1);
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
