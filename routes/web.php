<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlatController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BahanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\PenjualanController;

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
    return view('user.index');
});
Route::get('/daftar', function () {
    return view('user.regis');
});
Route::get('/beli/{keyword}', function () {
    return view('user.beli');
});

Route::get('/history/{id}',[PenjualanController::class,'history'])->middleware(['auth']);
Route::patch('/history/{id}',[PenjualanController::class,'uploadBukti'])->name('history.update')->middleware(['auth']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);




Route::prefix('admin')->group(function(){
    Route::get('/',function(){
        return view('admin.dashboard.index');
    });
    Route::get('/status/acc/{id}',[PenjualanController::class,'acc']);
    Route::get('/status/rejected/{id}',[PenjualanController::class,'rejected']);
    Route::resource('/bahan',BahanController::class);
    Route::resource('/alat',AlatController::class);
    Route::resource('/paket',PaketController::class);
    Route::resource('/user',UserController::class);
    Route::resource('/penjualan',PenjualanController::class);
})->middleware(['auth']);

