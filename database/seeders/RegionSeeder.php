<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regionnames = [
        ['regionName'=>'Ad Dakhiliyah'],
        ['regionName'=>'Ad Dhahirah'],
        ['regionName'=>'Al Batinah North'],
        ['regionName'=>'Al Batinah South'],
        ['regionName'=>'Al Buraimi'],
        ['regionName'=>'Al Wusta'],
        ['regionName'=>'Ash Sharqiyah North'],
        ['regionName'=>'Ash Sharqiyah South'],
        ['regionName'=>'Dhofar'],
        ['regionName'=>'Muscat'],
        ['regionName'=>'Musandam'],
    ];

Region::insert($regionnames);


        // DB::table('regions')->insert([
        //     'regionName' => ['Muscat','Salalah']
        // ]);
    }
}
