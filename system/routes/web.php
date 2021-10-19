<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\ProdukController;


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



Route::get('template', function () {
    return view('admin.template');
});


Route::get('register', function () {
    return view('register');
});


Route::get('login', [AuthController::class, 'showLogin']);

Route::get('admin/beranda', [HomeController::class, 'showBeranda']);
Route::get('admin/profil', [HomeController::class, 'showProfil']);
Route::get('admin/kategori', [HomeController::class, 'showKategori']);


Route::get('admin/produk', [ProdukController::class, 'index']);
Route::get('admin/produk/create', [ProdukController::class, 'create']);
Route::post('admin/produk', [ProdukController::class, 'store']);
Route::get('admin/produk/{produk}', [ProdukController::class, 'show']);
Route::get('admin/produk/{produk}/edit', [ProdukController::class, 'edit']);
Route::put('admin/produk/{produk}', [ProdukController::class, 'update']);
Route::delete('admin/produk/{produk}', [ProdukController::class, 'destroy']);



// tampilan depan
Route::get('/', [indexController::class, 'showindex']);
Route::get('/fashion', [indexController::class, 'showFashion']);
Route::get('/electronic', [indexController::class, 'showElectronic']);
Route::get('/jewellery', [indexController::class, 'showJewellery']);
Route::get('/keranjang', [indexController::class, 'showKeranjang']);
Route::get('/detail', [indexController::class, 'showDetail']);
