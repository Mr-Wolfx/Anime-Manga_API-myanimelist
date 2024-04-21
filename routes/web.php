<?php

use App\Http\Controllers\AnimeController;
use App\Http\Controllers\MangaController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/manga/generes', [MangaController::class, 'genres'])->name('manga.genres');
Route::get('/manga/generes/{genre_id}', [MangaController::class, 'index'])->name('manga.index');

Route::get('/anime/genres', [AnimeController::class, 'genres'])->name('anime.genres');