<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactPeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_people', function (Blueprint $table) {
            $table->id();
            $table->string('father_first_name');
            $table->string('father_middle_name')->nullable();
            $table->string('father_last_name');
            $table->text('father_home_address');
            $table->string('father_contact_no')->unique();
            $table->text('father_occupation');

            $table->string('mother_first_name');
            $table->string('mother_middle_name')->nullable();
            $table->string('mother_last_name');
            $table->text('mother_home_address');
            $table->string('mother_contact_no')->unique();
            $table->text('mother_occupation');

            $table->string('contact_first_name');
            $table->string('contact_middle_name')->nullable();
            $table->string('contact_last_name');
            $table->text('contact_home_address');
            $table->string('contact_contact_no')->unique();
            $table->string('contact_relation');
            $table->text('contact_for_emergency');

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
        Schema::dropIfExists('contact_people');
    }
}
