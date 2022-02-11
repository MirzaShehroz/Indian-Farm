<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->integer('user_role');
            $table->integer('membership_type');
            $table->string('contact_no', 100);
            $table->string('email');
            $table->string('password');
            $table->string('image');
            $table->integer('address_id');
            $table->integer('document_id')->nullable();
            $table->integer('email_otp')->nullable();
            $table->integer('mob_otp')->nullable();
            $table->integer('status');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
