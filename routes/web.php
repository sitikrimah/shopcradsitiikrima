<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TampilanAdminController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\HomeController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('loginAdmin', function () {
    return view('loginAdmin');
});

Route::get('registerAdmin', function () {
    return view('registerAdmin');
});

Route::get('login', function () {
    return view('login');
});

Route::get('tampilanAdmin', function () {
    return view('tampilanAdmin');
});

Route::get('produk', function () {
    return view('produk');
});
Route::get('home', function () {
    return view('home');
});

Route::post('login/auth', [UserController::class,'auth']);
Route::get('register', [UserController::class,'daftar']);
Route::post('daftar/create', [UserController::class,'create']);
Route::get('logout', [UserController::class,'logout']);

Route::get('produk', [ProdukController::class,'show']);
Route::get('produk/add', [ProdukController::class,'add']);
Route::post('produk/create', [ProdukController::class,'create']);
Route::get('produk/hapus/{kdproduk}', [ProdukController::class,'hapus']);
Route::get('produk/edit/{kdproduk}', [ProdukController::class,'edit']);
Route::post('produk/update/{kdproduk}', [ProdukController::class,'update']);

Route::get('home', [HomeController::class,'show']);


