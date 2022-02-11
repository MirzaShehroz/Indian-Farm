<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
			// $table->integer('user_id')->index('ads_user_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
			$table->integer('animal_type');
			$table->float('age', 10, 0);
			$table->float('price', 10, 0);
            $table->integer('no_animals')->nullable();
			$table->string('breed');
			$table->float('milk_capacity', 10, 0)->nullable();
			$table->float('due_month_pregnancy', 10, 0)->nullable();
			$table->string('gender', 100);
			$table->string('breed_type', 100);
			$table->integer('pregnant')->nullable();
			$table->integer('vaccinated');
			$table->integer('ownership_status');
			$table->text('description');
			$table->float('weight', 10, 0)->nullable();
            $table->unsignedBigInteger('ads_photo_id');
            $table->foreign('ads_photo_id')->references('id')->on('ads_photo');
			// $table->integer('ads_photo_id')->index('ads_photo_id');
            $table->unsignedBigInteger('ads_video_id');
            $table->foreign('ads_video_id')->references('id')->on('ads_videos');

            $table->unsignedBigInteger('ads_address_id');
            $table->foreign('ads_address_id')->references('id')->on('ads_adress');
			
			$table->integer('certified');
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
        Schema::dropIfExists('ads');
    }
}
