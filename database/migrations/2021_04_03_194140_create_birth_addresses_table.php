<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBirthAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('birth_addresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('birth_province_id');
            $table->unsignedBigInteger('birth_city_id');
            $table->unsignedBigInteger('birth_barangay_id');
            $table->text('birth_street');
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
        Schema::dropIfExists('birth_addresses');
    }
}
