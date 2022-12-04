<?php

namespace Database\Seeders;

use App\Models\ProductPrice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductPriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $table->id('productPrice_id');
        // $table->unsignedDecimal('productPrice');
        // $table->foreignId('product_id');
        // $table->foreignId('store_id');



        $someproducts = [
            [
                'id' => 1,
                'productPrice' => 12.2,
                'product_id'=>1,
                'store_id'=>1
            ],
            [
                'id' => 2,
                'productPrice' => 4,
                'product_id'=>2,
                'store_id'=>1
            ],
            [
                'id' => 3,
                'productPrice' => 20.6,
                'product_id'=>3,
                'store_id'=>1
            ],
            [
                'id' => 4,
                'productPrice' => 13,
                'product_id'=>1,
                'store_id'=>2
            ],
            [
                'id' => 5,
                'productPrice' => 4.6,
                'product_id'=>2,
                'store_id'=>2
            ],
            [
                'id' => 6,
                'productPrice' => 23.6,
                'product_id'=>3,
                'store_id'=>2
            ],
            [
                'id' => 7,
                'productPrice' => 15,
                'product_id'=>1,
                'store_id'=>3
            ],
            [
                'id' => 8,
                'productPrice' => 3.6,
                'product_id'=>2,
                'store_id'=>3
            ],
            [
                'id' => 9,
                'productPrice' => 21.6,
                'product_id'=>3,
                'store_id'=>3
            ],
            
        ];

        ProductPrice::insert($someproducts);
    }
}
