<?php

use App\Http\Controllers\NhanSuController;
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

Route::prefix('nhansu')->name('nhansu.')->group(function () {
    $class = NhanSuController::class;
    Route::get('/', [$class, 'index'])->name('index');
    Route::get('/create', [$class, 'create'])->name('create');
    Route::post('/', [$class, 'store'])->name('store');
    Route::get('/{nhansu}', [$class, 'show'])->name('show');
    Route::put('/{nhansu}', [$class, 'update'])->name('update');
    Route::delete('/{nhansu}', [$class, 'destroy'])->name('destroy');
    Route::get('/{nhansu}/edit', [$class, 'edit'])->name('edit');
});
