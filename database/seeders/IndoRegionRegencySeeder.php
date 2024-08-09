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

class IndoRegionRegencySeeder extends Seeder
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
        $regencies = RawDataGetter::getRegencies();

        // Membuat regency yang ada di Luar Indonesia
        // $provinces[] = [
        //     'id' => 35, // Sesuaikan ID sesuai urutan yang diperlukan
        //     'name' => 'regency Baru',
        // ];

        // Insert Data to Database
        DB::table('regencies')->insert($regencies);
    }
}
