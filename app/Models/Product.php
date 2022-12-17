<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;

    public function prices(){
        return $this->hasMany(ProductPrice::class);
    }

    public function stores(){
        return $this->belongsToMany(Store::class);
    }

    public function scopeFilter($query, array $filters)
    {
        
         //Filter Region 
    if (isset($filters['region'])) {
        $query->where('region', $filters['region']);
    }

         // Filter Category
    if (isset($filters['category'])) {
        $query->where('category', $filters['category']);
    } 

    // Filter for search 
    if (isset($filters['search'])) {
        $query->where('productName', 'like', '%'. $filters['search']. '%');
    }


        // Filter for search 
        // if($filters['search'] ?? false){
        //     $query->where('productName', 'like', '%'. request('search'). '%');
        // }
    }

    
}
