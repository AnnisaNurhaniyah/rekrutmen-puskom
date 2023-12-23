<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserProfileController;          
use App\Http\Controllers\LokerController; 
use App\Http\Controllers\PelamarController;
use App\Http\Controllers\CaptchaController;

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


Route::get('/',  [HomeController::class, 'welcome'])->name('/');
Route::get('/create/{id}', [HomeController::class, 'daftar'])->name('daftar');
Route::post('/insert-data', [HomeController::class, 'insertData'])->name('insert-data');
Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.perform');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/form', [CaptchaController::class, 'showForm']);
Route::post('/form', [CaptchaController::class, 'processForm']);
Route::middleware('auth')->group(function () {
	Route::get('/dashboard',[HomeController::class, 'index'])->name('home');
	
Route::get('/loker', [LokerController::class, 'index'])->name('loker');
Route::get('/tambah', [LokerController::class, 'create'])->name('loker.create');
Route::post('/loker/store', [LokerController::class, 'store'])->name('loker.store');
Route::get('/loker/{id}', [LokerController::class, 'edit'])->name('loker.edit');
Route::put('/loker/update/{id}', [LokerController::class, 'update'])->name('loker.update');
Route::get('/loker/delete/{id}', [LokerController::class, 'delete'])->name('loker.delete');

// Route::get('/informasi', [PelamarController::class, 'informasi'])->name('informasi');
Route::get('/user', [UserProfileController::class, 'show'])->name('user');
Route::get('/create', [UserProfileController::class, 'create'])->name('user.create');
Route::post('/user/store', [UserProfileController::class, 'store'])->name('user.store');
Route::get('/user/{id}', [UserProfileController::class, 'edit'])->name('user.edit');
Route::put('/user/update/{id}', [UserProfileController::class, 'update'])->name('user.update');
Route::get('/user/delete/{id}', [UserProfileController::class, 'delete'])->name('user.delete');
Route::get('/pelamar', [PelamarController::class, 'index'])->name('pelamar');
Route::get('/interview', [PelamarController::class, 'interview'])->name('listpelamar');
Route::get('{id}', [PelamarController::class, 'show'])->name('pelamar.detail');
Route::post('/pelamar/accept/{id_pelamar}', [PelamarController::class, 'acceptPelamar'])->name('pelamar.accept');
Route::post('/pelamar/decline/{id_pelamar}', [PelamarController::class, 'declinePelamar'])->name('pelamar.decline');


});