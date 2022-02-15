<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertifyAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certify_animals', function (Blueprint $table) {
            $table->id();
            $table->integer('appointment_type')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
			// $table->integer('user_id')->index('appointment_user_id');
            $table->unsignedBigInteger('appointment_address_id');
            $table->foreign('appointment_address_id')->references('id')->on('appointment_address');
			// $table->integer('appointment_address_id')->index('appointment_address_id');
            $table->unsignedBigInteger('vet_id');
            $table->foreign('vet_id')->references('id')->on('vets');
			$table->string('animal_type');
			$table->integer('no_of_animal');
			$table->string('breed');
			$table->string('contact_name', 100);
			$table->string('contact_no');
			$table->date('appointment_date');
			$table->time('appointment_time');
			$table->text('comment');
			$table->integer('status');
            $table->integer('certified_status');
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
        Schema::dropIfExists('certify_animals');
    }
}
