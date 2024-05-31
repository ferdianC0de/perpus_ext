<?php

use App\Http\Controllers\Admin\KategoriController;
use App\Models\Master\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('kategoris', [KategoriController::class, 'getAllDataKategori'])->name('kategori');
Route::get('kategoris/{name?}', [KategoriController::class, 'getDataKategoriByName'])->name('kategori_by_name');
Route::post('kategoris', [KategoriController::class, 'storeKategori'])->name('kategori_store');
Route::put('kategoris/{id}', [KategoriController::class, 'updateKategori'])->name('kategori_update');
Route::delete('kategoris', [KategoriController::class, 'deleteKategori'])->name('kategori_delete');

