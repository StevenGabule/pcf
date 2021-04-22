<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLastSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('last_schools', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('high_school_id');
            $table->string('award_received')->nullable();
            $table->string('year_last_attended');
            $table->string('lrn');
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
        Schema::dropIfExists('last_schools');
    }
}
