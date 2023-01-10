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

        $query->join('product_prices', 'product_prices.product_id', '=', 'products.id')
            ->join('stores', 'stores.id', '=', 'product_prices.store_id')
            ->join('wilayat', 'wilayat.id', '=', 'stores.wilayah_id')
            ->join('regions', 'regions.id', '=', 'wilayat.region_id')
            ->join('categories', 'categories.id', '=', 'products.cat_id');
        // Filter by keyword
        if (!empty($filters['search'])) {
            $query->where(function ($q) use ($filters) {
                $q->where('productName', 'like', '%' . $filters['search'] . '%')
                    ->orWhere('storeName', 'like', '%' . $filters['search'] . '%');
            });
        }

        // Filter by region
        if (isset($filters['region'])) {
            $query->where('regions.id', $filters['region']);
        }

        // Filter by category
        if (isset($filters['category'])) {
            $query->where('categories.id', $filters['category']);
        }


        return $query;
    }
}
