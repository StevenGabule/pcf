<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportProcurementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_procurements', function (Blueprint $table) {
            $table->id();
            $table->string('year');
            $table->string('file_attachment');
            $table->unsignedInteger('type')
                ->comment('|1-Indicative Annual Procurement Plan
                                    |2-Annual Procurement Plan non-CSE
                                    |3-Annual Procurement Plan CSE
                                    |4Procurement Monitoring Report');
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
        Schema::dropIfExists('report_procurements');
    }
}
