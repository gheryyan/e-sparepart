<?php

use App\Http\Controllers\barangController;
use App\Http\Controllers\OrderController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [barangController::class,'index']);
Route::get('/admin/create', [barangController::class,'create']);
Route::post('/admin/store', [barangController::class,'store']);
Route::get('/admin/{id}/edit', [barangController::class,'edit']);
Route::put('/admin/{id}', [barangController::class,'update']);
Route::delete('/admin/{id}', [barangController::class,'destroy']);
Route::get('/cekbarang', [BarangController::class, 'cekBarang'])->name('cekbarang');
Route::get('/order', [OrderController::class, 'create'])->name('order.create');
Route::post('/order', [OrderController::class, 'store'])->name('order.store');
Route::get('/help', [barangController::class,'help']);
