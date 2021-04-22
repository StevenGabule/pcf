<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolItemTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_item_transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('school_item_id');
            $table->unsignedTinyInteger('qty')->default(1);
            $table->unsignedBigInteger('student_id')->nullable();
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->string('purpose')->nullable();
            $table->unsignedTinyInteger('status')->default(1)->comment('1-pending|2-lost|3-damage|4-return');
            $table->dateTime('date_return')->nullable();
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
        Schema::dropIfExists('school_item_transactions');
    }
}
