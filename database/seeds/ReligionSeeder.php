<?php

use App\Models\Religion;
use Illuminate\Database\Seeder;

class ReligionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Aglipayan'],
            ['name' => 'Assembly of God'],
            ['name' => 'Association of Fundamental Baptist Churches in the Philippines'],
            ['name' => 'Baptists'],
            ['name' => 'Bible Baptist Church'],
            ['name' => 'Born Again'],
            ['name' => 'Buddhist'],
            ['name' => 'Catholic'],
            ['name' => 'Chinese'],
            ['name' => 'Christadelphian'],
            ['name' => 'Church of Christ'],
            ['name' => 'Church of God'],
            ['name' => 'Church of Jesus Christ of the Latter Day Saints'],
            ['name' => 'Church of Jesus Christ of the Latter Day Saints'],
            ['name' => 'Convention of the Philippine Baptist Church'],
            ['name' => 'Crusaders of the Divine Church of Christ Inc.'],
            ['name' => 'El Shaddai'],
            ['name' => 'Evangelical'],
            ['name' => 'Evangelical Christian Outreach Foundation'],
            ['name' => 'Evangelicals (PCEC)'],
            ['name' => 'Faith Tabernacle Church (Living Rock Ministries)'],
            ['name' => 'God World Missions Church'],
            ['name' => 'Hindu'],
            ['name' => 'Iglesia Ni Cristo'],
            ['name' => 'Iglesia sa Dios Espiritu Santo Inc.'],
            ['name' => 'Islam'],
            ['name' => 'Jehovah\'s Witnesses'],
            ['name' => 'Jesus is Lord Church'],
            ['name' => 'Lutheran Church in the Philippines'],
            ['name' => 'Mennonites'],
            ['name' => 'METHODIST'],
            ['name' => 'Muslim'],
            ['name' => 'New Life Assemble'],
            ['name' => 'Non-Roman Catholic and Protestant (NCCP)'],
            ['name' => 'Orthodox'],
            ['name' => 'Pentecostal'],
            ['name' => 'Philippine Benevolent Missionaries Association'],
            ['name' => 'Philippine Episcopal Church'],
            ['name' => 'Philippine Independent Catholic Church'],
            ['name' => 'Protestants'],
            ['name' => 'Rizalistas'],
            ['name' => 'Roman Catholic'],
            ['name' => 'SDA'],
            ['name' => 'Seventh-day Adventist'],
            ['name' => 'Tribal Religions'],
            ['name' => 'Unión Espiritista Cristiana de Filipinas, Inc.'],
            ['name' => 'United Church of Christ in the Philippines'],
            ['name' => 'United Pentecostal Church (Philippines) Inc.'],
        ];
        Religion::insert($data);
    }
}
