<?php

use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\UserController;

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

Route::get('/', [ProdukController::class, 'index']);

Route::get('tambahproduk' ,[ProdukController::class, 'create']);
Route::post('tambahproduk' ,[ProdukController::class, 'store']);


Route::get('editproduk/{id_produk}' ,[ProdukController::class, 'edit']);
Route::post('editproduk/{id_produk}' ,[ProdukController::class, 'update']);

Route::get('hapusproduk/{id_produk}' ,[ProdukController::class, 'delete']);
Route::post('hapusproduk/{id_produk}' ,[ProdukController::class, 'destroy']);

Route::get('/{status}' ,[ProdukController::class, 'status']);
