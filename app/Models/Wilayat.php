<?php

namespace App\Models;

use App\Models\Region;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Wilayat extends Model
{
    use HasFactory;
    protected $table = 'wilayat';

    public function region(){
        return $this->belongsTo(Region::class);        
    }

    public function stores(){
        return $this->hasMany(Stores::class);
    }
    
}
