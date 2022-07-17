<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\NilaiController;
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


// login
Route::get('/register', [AuthorController::class, 'register']);
Route::post('/register', [AuthorController::class, 'store']);
Route::get('/', [AuthorController::class, 'login']);
Route::post('/login', [AuthorController::class, 'authenticate']);

Route::get('/dashboard', [MahasiswaController::class, 'dashboard']);

// crud Mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create']);
Route::post('/mahasiswa/store', [MahasiswaController::class, 'store']);
Route::get('/mahasiswa/{id}/edit', [MahasiswaController::class, 'edit']);
Route::post('/mahasiswa/{id}/update', [MahasiswaController::class, 'update']);
Route::get('/mahasiswa/{id}/delete', [MahasiswaController::class, 'destroy']);

// crud Nilai
Route::get('/nilai', [NilaiController::class, 'index']);
Route::get('/nilai/create', [NilaiController::class, 'create']);
Route::post('/nilai/store', [NilaiController::class, 'store']);
Route::get('/nilai/{id}/edit', [NilaiController::class, 'edit']);
Route::post('/nilai/{id}/update', [NilaiController::class, 'update']);
Route::get('/nilai/{id}/delete', [NilaiController::class, 'destroy']);


Route::get('/grade', [MahasiswaController::class, 'grade']);