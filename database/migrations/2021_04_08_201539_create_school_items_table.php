<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_items', function (Blueprint $table) {
            $table->id();
            $table->text('photo')->nullable();
            $table->string('name');
            $table->text('description');
            $table->string('unit');
            $table->unsignedInteger('qty')->default(0);
            $table->unsignedTinyInteger('status')->default(1)->comment('1-avail|0-unavailable');
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
        Schema::dropIfExists('school_items');
    }
}
