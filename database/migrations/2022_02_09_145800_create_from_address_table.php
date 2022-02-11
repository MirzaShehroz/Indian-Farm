<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFromAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('from_address', function (Blueprint $table) {
            $table->id();
            // $table->integer('from_address_id', true);
			$table->text('address_line1');
			$table->text('address_line2')->nullable();
			$table->string('area');
			$table->string('city', 100);
			$table->string('state', 100);
			$table->string('district', 100);
			$table->string('taluka', 100);
			$table->integer('zipcode');
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
        Schema::dropIfExists('from_address');
    }
}
