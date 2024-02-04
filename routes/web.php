<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DsController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\SkdController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\ValidasiController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [HomeController::class, 'dashboard']);

Route::get('/pasien/create', [PasienController::class,'create']);
Route::post('/pasien', [PasienController::class,'store']);
Route::get('/pasien', [PasienController::class,'index']);
Route::get('/pasien/{pasien_id}/edit', [PasienController::class,'edit']);
Route::put('/pasien/{pasien_id}', [PasienController::class,'update']);
Route::delete('/pasien/{pasien_id}', [PasienController::class,'destroy']);

Route::get('/skd', [SkdController::class, 'index']);
Route::get('/skd/{pasien_id}/create', [SkdController::class,'create']);
Route::post('/skd/{pasien_id}', [SkdController::class,'store']);
Route::get('/skd/{pasien_id}', [SkdController::class,'index']);
Route::get('/skd/{skd_id}/edit', [SkdController::class,'edit']);
Route::put('/skd/{skd_id}', [SkdController::class,'update']);
Route::delete('/skd/{skd}', [SkdController::class,'destroy']);

Route::get('/ds', [DsController::class, 'index']);
Route::post('/ds/{skd_id}', [DsController::class,'store']);
Route::delete('/skd/{skd}', [DsController::class,'destroy']);
Route::get('/pdf/{ds_id}/cetakpdf', [PdfController::class, 'view_pdf']);

Route::get('/validasi', [ValidasiController::class, 'dashboard']);

Route::get('/scan', [ValidasiController::class,'scanner'])->name('scan');

Route::get('/hasil/{dsid}', [ValidasiController::class, 'hasil'])->name('hasil');

