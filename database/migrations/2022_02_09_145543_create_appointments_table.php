<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
			$table->integer('appointment_type');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
			// $table->integer('user_id')->index('appointment_user_id');
            $table->unsignedBigInteger('appointment_address_id');
            $table->foreign('appointment_address_id')->references('id')->on('appointment_address');
			// $table->integer('appointment_address_id')->index('appointment_address_id');
			$table->integer('animal_type');
			$table->integer('no_of_animal');
			$table->integer('breed');
			$table->string('contact_name', 100);
			$table->integer('contact_no');
			$table->date('appointment_date');
			$table->time('appointment_time');
			$table->text('comment');
			$table->integer('status');
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
        Schema::dropIfExists('appointments');
    }
}
