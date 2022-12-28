<?php

namespace Database\Seeders;

use App\Models\Store;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $table->id('store_id');
        // $table->string('storeName');
        // $table->string('storeLocation');
        // $table->foreignId('region_id');
        // $table->foreignId('wilayah_id');
        // $table->string('contactNumber');

        $stores = [
            [
                'id'=>1,
                'storeName'=>'Khalfan Store',
                'storeLocation'=>'',
                'region_id'=>1,
                'wilayah_id'=>1,
                'user_id' =>2,
                'contactNumber'=>'001'
            ],
            [
                'id'=>2,
                'storeName'=>'Ahmed Store',
                'storeLocation'=>'',
                'region_id'=>1,
                'wilayah_id'=>1,
                'user_id' =>3,
                'contactNumber'=>'002'
            ],
            [
                'id'=>3,
                'storeName'=>'Kororo Store',
                'storeLocation'=>'',
                'region_id'=>1,
                'wilayah_id'=>1,
                'user_id' =>4,
                'contactNumber'=>'003'
            ],

        ];

        Store::insert($stores);

    }
}
