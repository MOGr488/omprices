<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    protected $fillable = [
        'storeName', 'storeLocation', 'website', 'region_id', 'wilayah_id', 'user_id', 'contactNumber'
    ];



    public function user(){
        return $this->belongsTo(User::class);
    }

    public function prices(){
        return $this->hasMany(ProductPrice::class);
    }

    public function products(){
        return $this->belongsToMany(Product::class);
    }

    public function wilayah(){
        return $this->belongsTo(Wilayat::class);
    }


    
}
