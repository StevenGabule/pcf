<?php

use Illuminate\Database\Seeder;

class TribeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[
          [
              'name' => 'Ivatan/Itbayat'
          ],[
              'name' => 'Ilocano'
          ],[
              'name' => 'Bago'
          ],[
              'name' => 'Ibanag'
          ],[
              'name' => 'Itawes / Itawis / Itawit'
          ],[
              'name' => 'Gaddang'
          ],[
              'name' => 'Ga\'dang'
          ],[
              'name' => 'Yogad'
          ],[
              'name' => 'Bolinao'
          ],[
              'name' => 'Pangasinan'
          ],[
              'name' => 'Sambal'
          ],[
              'name' => 'Kapampangan'
          ],[
              'name' => 'Kasiguranin'
          ],[
              'name' => 'Paranan / Palanan'
          ],[
              'name' => 'Tagalog'
          ],[
              'name' => 'Caviteño'
          ],[
              'name' => 'Ternateño'
          ],[
              'name' => 'Bicolano'
          ],[
              'name' => 'Masbateño'
          ],
        ];
        \App\Models\Tribe::insert($data);
    }
}
