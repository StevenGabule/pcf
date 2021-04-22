<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ReportProcurement;
use Faker\Generator as Faker;

/* $table->string('year');
$table->string('file_attachment');
$table->unsignedInteger('type')
    ->comment('|1-Indicative Annual Procurement Plan
                        |2-Annual Procurement Plan non-CSE
                        |3-Annual Procurement Plan CSE
                        |4Procurement Monitoring Report');*/
$factory->define(ReportProcurement::class, function (Faker $faker) {
    $year = [2018,2019,2020,2021];
    return [
        'year' => $year[rand(0,3)],
        'file_attachment' => 'sample_report.pdf',
        'type' => rand(1,4)
    ];
});
