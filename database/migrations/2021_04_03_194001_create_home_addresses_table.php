<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_addresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('home_province_id');
            $table->unsignedBigInteger('home_city_id');
            $table->unsignedBigInteger('home_barangay_id');
            $table->string('home_street_name');
            $table->string('home_postal_code');
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
        Schema::dropIfExists('home_addresses');
    }
}
