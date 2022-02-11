<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookTransportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_transport', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
			$table->integer('animal_type');
			$table->integer('no_of_animal');
			$table->string('contact_name');
			$table->string('contact_no', 100);
			$table->date('date_of_transport');
            $table->unsignedBigInteger('from_address_id');
            $table->foreign('from_address_id')->references('id')->on('from_address');

			// $table->integer('from_address_id')->index('from_address_id');
            $table->unsignedBigInteger('to_address_id');
            $table->foreign('to_address_id')->references('id')->on('to_address');
			// $table->integer('to_address_id')->index('to_address_id');
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
        Schema::dropIfExists('book_transport');
    }
}
