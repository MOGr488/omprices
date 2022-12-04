<?php

namespace Database\Seeders;

use App\Models\Wilayat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WilayatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allwilayat = [
            [
                'wilayah' => 'Manah',
                'region_id' => '1'
            ],
        ];


        Wilayat::insert($allwilayat);
    }
}
