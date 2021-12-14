<?php

use App\Http\Controllers\NhanSuController;
use App\Http\Controllers\VaiTroController;
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
    return redirect('/nhansu');
});

Route::prefix('nhansu')->name('nhansu.')->group(function () {
    $class = NhanSuController::class;
    Route::get('/', [$class, 'index'])->name('index');
    Route::get('/create', [$class, 'create'])->name('create');
    Route::post('/', [$class, 'store'])->name('store');
    Route::get('/{nhansu}', [$class, 'show'])->name('show');
    Route::put('/{nhansu}', [$class, 'update'])->name('update');
    Route::delete('/{nhansu}', [$class, 'destroy'])->name('destroy');
    Route::get('/{nhansu}/edit', [$class, 'edit'])->name('edit');
    Route::post('/them_vt_ns', [$class, 'them_vaitro_nhansu'])->name('them_vaitro_nhansu');
    Route::get('/{nhansu}/add_vt', [$class, 'add_vai_tro_for_nhan_su'])->name('add_vai_tro_for_nhan_su');
    Route::put('/{nhansu}/luu_vt', [$class, 'luu_vai_tro_for_nhan_su'])->name('luu_vai_tro_for_nhan_su');
    Route::delete('/delete/{id}', [$class, 'delete_vaitro_of_nhansu'])->name('delete_vaitro_of_nhansu');
});

Route::prefix('vaitro')->name('vaitro.')->group(function () {
    $class = VaiTroController::class;
    Route::get('/', [$class, 'index'])->name('index');
    Route::get('/create', [$class, 'create'])->name('create');
    Route::post('/', [$class, 'store'])->name('store');
    Route::get('/{vaitro}', [$class, 'show'])->name('show');
    Route::put('/{vaitro}', [$class, 'update'])->name('update');
    Route::delete('/{vaitro}', [$class, 'destroy'])->name('destroy');
    Route::get('/{vaitro}/edit', [$class, 'edit'])->name('edit');
});
