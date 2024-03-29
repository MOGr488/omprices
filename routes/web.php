<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\Storescontroller;
use App\Models\Region;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/






Route::get('/', [ProductsController::class, 'index'])->name('home');;
Route::get('/searchResult', [ProductsController::class, 'search']);

Route::get('/login', function(){
    return view('login');
});


Route::post('/store', [Storescontroller::class, 'store']);
Route::get('/cities', [DashboardController::class, 'City']);
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::delete('/stores/{store}', [StoresController::class, 'destroy'])->name('stores.destroy');


require __DIR__.'/auth.php';


