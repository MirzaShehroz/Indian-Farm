<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsPhotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads_photo', function (Blueprint $table) {
            $table->id();
            $table->text('photo1');
			$table->text('photo2')->nullable();
			$table->text('photo3')->nullable();
			$table->text('photo4')->nullable();
			$table->text('photo5')->nullable();
			$table->text('photo6')->nullable();
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
        Schema::dropIfExists('ads_photo');
    }
}
