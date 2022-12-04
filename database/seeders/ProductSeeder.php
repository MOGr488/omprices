<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = [
            [
                'id' => 1,
                'productName' => 'Potato',
                'cat_id' => 1
            ],
            [
                'id' => 2,
                'productName' => 'Banana',
                'cat_id' => 1
            ],
            [
                'id' => 3,
                'productName' => 'Carrot',
                'cat_id' => 1
            ],
        ];

        Product::insert($product);
    }
}
