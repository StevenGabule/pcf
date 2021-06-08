<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('last_school_id');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('email')->nullable();
            $table->string('suffix_name')->nullable();
            $table->string('nick_name')->nullable();
            $table->date('birthday')->nullable();
            $table->unsignedTinyInteger('year_level')->default('1')->nullable();
            $table->string( 'citizenship');
            $table->tinyInteger( 'civil_status')
            ->comment('1-single|2-in-a-relationship|3-engaged|4-married|5-its-complicated
            |6-open-relationship|7-widowed|8-windowed|9-separated|10-divorced|11-civil-union|12-domestic-partnership|13-i-dont-want-to-say');
            $table->unsignedBigInteger('religion_id');
            $table->tinyInteger('gender')->comment('1-m|2-f');
            $table->unsignedBigInteger('tribe_id');
            $table->string('height');
            $table->unsignedInteger('weight');
            $table->char('blood_type')->nullable();
            $table->unsignedBigInteger('birth_address_id');
            $table->unsignedBigInteger('home_address_id');
            $table->unsignedBigInteger('contact_id');
            $table->unsignedBigInteger('contact_person_id');
            $table->unsignedBigInteger('education_background_id');
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
        Schema::dropIfExists('students');
    }
}
