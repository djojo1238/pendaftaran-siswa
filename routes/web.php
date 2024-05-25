<?php

use App\Http\Controllers\EskulController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DaftarController;
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

// Route::get('/', function () {
//     return view('daftar.pendaftaran');
// });
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'show'])->name('login');
    Route::post('/storelogin', [LoginController::class, 'store'])->name('storelogin');

    Route::get('/register', [RegisterController::class, 'show'])->name('register');
    Route::post('/storeregister', [RegisterController::class, 'store'])->name('storeregister');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
    Route::get('/home', [HomeController::class, 'home'])->name('home');

    Route::get('/jurusan', [JurusanController::class, 'jurusan'])->name('jurusan');
    Route::post('/jurusan', [JurusanController::class, 'store'])->name('storejurusan');
    Route::get('/jurusan/{id}', [JurusanController::class, 'show'])->name('editjurusan');
    Route::put('/jurusan/{id}', [JurusanController::class, 'update'])->name('updatejurusan');
    Route::delete('/jurusan/{id}', [JurusanController::class, 'delete'])->name('deletejurusan');

    Route::get('/eskul', [EskulController::class, 'eskul'])->name('eskul');
    Route::post('/eskul', [EskulController::class, 'store'])->name('storeeskul');
    Route::get('/eskul/{id}', [EskulController::class, 'show'])->name('editeskul');
    Route::put('/eskul/{id}', [EskulController::class, 'update'])->name('updateeskul');
    Route::delete('/eskul/{id}', [EskulController::class, 'delete'])->name('deleteeskul');

    Route::get('/data-daftar',[DaftarController::class, 'siswa'])->name('datadaftar');
});

Route::get('/pendaftaran',[DaftarController::class,'daftar'])->name('daftar');
Route::post('/pendaftaran',[DaftarController::class,'store'])->name('storedaftar');
