<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationBackgroundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_backgrounds', function (Blueprint $table) {
            $table->id();
            $table->string('primary_education');
            $table->string('primary_school_year');
            $table->string('primary_school_address');
            $table->string('primary_honor')->nullable();

            $table->string('secondary_education');
            $table->string('secondary_school_year');
            $table->string('secondary_school_address');
            $table->string('secondary_honor')->nullable();
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
        Schema::dropIfExists('education_backgrounds');
    }
}
