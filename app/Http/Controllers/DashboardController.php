<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Models\Wilayat;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $regions = Region::with('wilayat')->get();
        return view('dashboard', compact('regions'));
    }

    public function city(Request $request){    
            $regionId = $request->input('region_id');
            $cities = Wilayat::where('region_id', $regionId)->get();
    
            return response()->json($cities);
    }
}
