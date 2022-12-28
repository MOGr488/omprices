<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Storescontroller extends Controller
{
    public function store(Request $request)
    {
        request()->validate([
            'storeName' => 'required',
            'contactNumber' => 'required|numeric',
            'Region' => 'required|exists:regions,id',
            'Wilayah' => 'required|exists:wilayat,id',
            'location' => 'required',
            'website' => 'nullable|url'
        ]);

   
        

        // Retrieve the authenticated user's ID
    $userId = Auth::id();

        Store::create([
            'storeName'=> request('storeName'),
            'storeLocation'=> request('location'),
            'website'=> request('website'),
            'region_id'=> request('Region'),
            'wilayah_id'=> request('Wilayah'),
            'user_id' => $userId,
            'contactNumber'=> request('contactNumber'),
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);


        return redirect()->route('dashboard');
    }

}
