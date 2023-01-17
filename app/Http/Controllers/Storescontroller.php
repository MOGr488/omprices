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
            'storeName' => 'required|string|max:255',
            'contactNumber' => 'required|string|regex:/^[97][0-9]{7}$/',
            'Region' => 'required|exists:regions,id',
            'Wilayah' => 'required|exists:wilayat,id',
            'location' => 'required|string|max:255',
            'website' => 'nullable|url|string|max:255'
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


    public function destroy($id)
{
    $store = Store::findOrFail($id);
    if($store->user_id != auth()->user()->id){
        // the user is not authorized to perform this action
        return redirect()->back()->with('error', 'You are not authorized to perform this action');
    }
    $store->delete();
    session()->flash('success', 'Store deleted successfully');
    return redirect()->route('dashboard');
    // ->with('success', 'Store deleted successfully');
}


}
