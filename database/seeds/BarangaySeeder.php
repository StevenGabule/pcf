<?php

use App\Models\Barangay;
use Illuminate\Database\Seeder;

class BarangaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangay = [
            ['name' => 'Bagontaas','city_id' => 1],
            ['name' => 'Banlag','city_id' => 1],
            ['name' => 'Barobo','city_id' => 1],
            ['name' => 'Batangan','city_id' => 1],
            ['name' => 'Catumbalon','city_id' => 1],
            ['name' => 'Colonia','city_id' => 1],
            ['name' => 'Concepcion','city_id' => 1],
            ['name' => 'Dagat-Kidavao','city_id' => 1],
            ['name' => 'Guinoyuran','city_id' => 1],
            ['name' => 'Kahapunan','city_id' => 1],
            ['name' => 'Laligan','city_id' => 1],
            ['name' => 'Lilingayon','city_id' => 1],
            ['name' => 'Lourdes','city_id' => 1],
            ['name' => 'Lumbayao','city_id' => 1],
            ['name' => 'Lumbo','city_id' => 1],
            ['name' => 'Lurugan','city_id' => 1],
            ['name' => 'Maapag','city_id' => 1],
            ['name' => 'Mabuhay','city_id' => 1],
            ['name' => 'Mailag','city_id' => 1],
            ['name' => 'Mount, Nebo','city_id' => 1],
            ['name' => 'Nabago','city_id' => 1],
            ['name' => 'Pinatilan','city_id' => 1],
            ['name' => 'Poblacion','city_id' => 1],
            ['name' => 'San, Carlos','city_id' => 1],
            ['name' => 'San, Isidro','city_id' => 1],
            ['name' => 'Sinabuagan','city_id' => 1],
            ['name' => 'Sinayawan','city_id' => 1],
            ['name' => 'Sugod','city_id' => 1],
            ['name' => 'Tongantongan','city_id' => 1],
            ['name' => 'Tugaya','city_id' => 1],
            ['name' => 'Vintar','city_id' => 1],
            ['name' => 'Barangay 1', 'city_id' => 2],
            ['name' => 'Barangay 2', 'city_id' => 2],
            ['name' => 'Barangay 3', 'city_id' => 2],
            ['name' => 'Barangay 4', 'city_id' => 2],
            ['name' => 'Barangay 5', 'city_id' => 2],
            ['name' => 'Barangay 6', 'city_id' => 2],
            ['name' => 'Barangay 7', 'city_id' => 2],
            ['name' => 'Barangay 8', 'city_id' => 2],
            ['name' => 'Barangay 9', 'city_id' => 2],
            ['name' => 'Barangay 10 (Impalambong)  ', 'city_id' => 2],
            ['name' => 'Barangay 11 (Impalambong)', 'city_id' => 2],
            ['name' => 'Aglayan', 'city_id' => 2],
            ['name' => 'Apo Macote', 'city_id' => 2],
            ['name' => 'Bangcud', 'city_id' => 2],
            ['name' => 'Busdi', 'city_id' => 2],
            ['name' => 'Cabangahan', 'city_id' => 2],
            ['name' => 'Caburacanan', 'city_id' => 2],
            ['name' => 'Can-ayan', 'city_id' => 2],
            ['name' => 'Capitan Angel', 'city_id' => 2],
            ['name' => 'Casisang', 'city_id' => 2],
            ['name' => 'Dalwangan', 'city_id' => 2],
            ['name' => 'Imbayao', 'city_id' => 2],
            ['name' => 'Indalasa', 'city_id' => 2],
            ['name' => 'Kalasungay', 'city_id' => 2],
            ['name' => 'Kibalabag', 'city_id' => 2],
            ['name' => 'Kulaman', 'city_id' => 2],
            ['name' => 'Laguitas', 'city_id' => 2],
            ['name' => 'Linabo', 'city_id' => 2],
            ['name' => 'Magsaysay', 'city_id' => 2],
            ['name' => 'Maligaya', 'city_id' => 2],
            ['name' => 'Managok', 'city_id' => 2],
            ['name' => 'Manalog', 'city_id' => 2],
            ['name' => 'Mapayag', 'city_id' => 2],
            ['name' => 'Mapulo', 'city_id' => 2],
            ['name' => 'Miglamin', 'city_id' => 2],
            ['name' => 'Patpat', 'city_id' => 2],
            ['name' => 'Saint Peter', 'city_id' => 2],
            ['name' => 'San Jose', 'city_id' => 2],
            ['name' => 'San Martin', 'city_id' => 2],
            ['name' => 'Santo Niño', 'city_id' => 2],
            ['name' => 'Silae', 'city_id' => 2],
            ['name' => 'Simaya', 'city_id' => 2],
            ['name' => 'Sinanglanan', 'city_id' => 2],
            ['name' => 'Sumpong', 'city_id' => 2],
            ['name' => 'Violeta', 'city_id' => 2],
            ['name' => 'Zamboanguita', 'city_id' => 2]
        ];

        Barangay::insert($barangay);
    }
}
