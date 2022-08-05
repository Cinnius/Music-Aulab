<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\SongController;
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

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/song', [SongController::class, 'form'])->name('form');
Route::post('/song/submit', [SongController::class, 'postSong'])->name('postSong');
Route::get('/song/{song}', [SongController::class, 'detailSong'])->name('detailSong');

// Update & Delete song
Route::get('/song/update/{song}', [SongController::class, 'editSong'])->name('editSong');
Route::put('/song/update/{song}', [SongController::class, 'updateSong'])->name('updateSong');
Route::delete('song/delete/{song}', [SongController::class, 'destroySong'])->name('destroySong');