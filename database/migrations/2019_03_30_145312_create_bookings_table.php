<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('event_id');
            // $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
            $table->integer('user_id');
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('booked');
            $table->string('payment_method');
            // $table->string('payment_status');
            // $table->enum('payment_method',array('visa','fawry'));
            // $table->enum('payment_status', array('pending','paid','unpaid'));
            $table->integer('number_of_traviles');
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
        Schema::dropIfExists('bookings');
    }
}
