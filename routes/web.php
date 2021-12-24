<?php

use App\Http\Controllers\BasisPengetahuanController;
use App\Http\Controllers\CfController;
use App\Http\Controllers\DiagnosaController;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PenyakitController;
use App\Http\Controllers\RoutingController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::group(['middleware' => 'auth', 'prefix' => '/'], function () {
    
    // Route::get('{any}', [RoutingController::class, 'root'])->name('any');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/informasi', [App\Http\Controllers\HomeController::class, 'informasi'])->name('informasi');
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
    Route::get('/diagnosa', [DiagnosaController::class, 'index'])->name('diagnosa');
    Route::post('/diagnosa', [DiagnosaController::class, 'store'])->name('diagnosa.store');
    Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan');
    Route::get('/penyakit', [PenyakitController::class, 'index'])->name('penyakit');
    Route::get('/gejala', [GejalaController::class, 'index'])->name('gejala');
    Route::get('/cf', [CfController::class, 'index'])->name('cf');
    Route::get('/basis', [BasisPengetahuanController::class, 'index'])->name('basis');

});