<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;

    public function prices()
    {
        return $this->hasMany(ProductPrice::class);
    }

    public function stores()
    {
        return $this->belongsToMany(Store::class);
    }

    public function scopeFilter($query, array $filters)
    {
        // // Join the store table
        // $query->join('stores', 'stores.id', '=', 'products.store_id');



        //Filter Region 
        if (isset($filters['region'])) {
            // Join regions, stores, and productPrice tables
            // $query->join('product_prices', 'product_prices.product_id', '=', 'products.id')
            // ->join('stores', 'stores.id', '=', 'product_prices.store_id')
            // ->join('regions', 'regions.id', '=', 'stores.region_id')->where('region_id', $filters['region']);

            $query->whereHas('prices.store.wilayah.region', function ($query) use ($filters) {
                $query->where('id', $filters['region']);
            });
            

            return $query;
        }

        // Filter Category
        if (isset($filters['category'])) {
            $query->join('categories', 'categories.id', '=', 'products.category_id')
                ->where('catName', $filters['category']);
        }


        // Filter for search 
        if (isset($filters['search'])) {
            $query->where('productName', 'like', '%' . $filters['search'] . '%');
        }

        return $query;
    }
}
