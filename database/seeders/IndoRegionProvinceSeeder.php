<?php

/*
 * This file is part of the IndoRegion package.
 *
 * (c) Azis Hapidin <azishapidin.com | azishapidin@gmail.com>
 *
 */

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use AzisHapidin\IndoRegion\RawDataGetter;
use Illuminate\Support\Facades\DB;

class IndoRegionProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @deprecated
     * 
     * @return void
     */
    public function run()
    {
        // Get Data
        $provinces = RawDataGetter::getProvinces();

        // Membuat province yang ada di Luar Indonesia
        // $provinces[] = [
        //     'id' => 35, // Sesuaikan ID sesuai urutan yang diperlukan
        //     'name' => 'Provinsi Baru',
        // ];

        // Insert Data to Database
        DB::table('provinces')->insert($provinces);
    }
    // php artisan db:seed --class=IndoRegionProvinceSeeder

}
