<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Store;
use App\Models\Region;
use App\Models\Wilayat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $regions = Region::with('wilayat')->get();
        $userHasStore = User::has('store')->find(Auth::user()->id);
        if($userHasStore){
            $store = User::with('store')->find(Auth::user()->id);
        }else{
            $store = null;
        }
        return view('dashboard', compact('regions', 'userHasStore', 'store'));
    }

    public function city(Request $request){    
            $regionId = $request->input('region_id');
            $cities = Wilayat::where('region_id', $regionId)->get();
    
            return response()->json($cities);
    }
}
