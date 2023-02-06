<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PpdbController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PaymentController;

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
    return view('home.index');
});

Route::get('/data', function () {
    return view('payments.index');
});

Route::resource('ppdb', PpdbController::class)->middleware('isLogin');
Route::resource('payments', PaymentController::class);
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('isTamu');
Route::post('/login', [LoginController::class, 'authanticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class,'index'])->middleware('isTamu');
Route::post('/register', [RegisterController::class,'store']);
Route::get('/tabel', [RegisterController::class, 'tabel'])->name('payments.tabel');
Route::get('/bukti/{id}', [RegisterController::class,'proof'])->name('bukti');
Route::get('/detail/{id}', [RegisterController::class,'detail'])->name('detail');
Route::get('/user',[RegisterController::class,'user'])->name('user');
Route::patch('/tabel/validasi/{id}', [RegisterController::class,'validasi'])->name('validasi');
Route::patch('/tabel/tolak/{id}',[RegisterController::class,'reject'])->name('tolak');