<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/filmes', [App\Http\Controllers\FilmesController::class, 'index']);
Route::get('/series', [App\Http\Controllers\SeriesController::class, 'index']);
Route::get('/animes', [App\Http\Controllers\AnimesController::class, 'index']);
Route::get('/trashflix', [App\Http\Controllers\TrashflixController::class, 'index']);
Route::get('/gorefilmes', [App\Http\Controllers\GoreFilmesController::class, 'index']);
Route::get('/goreseries', [App\Http\Controllers\GoreSeriesController::class, 'index']);
Route::get('/animesfilmes', [App\Http\Controllers\AnimesFilmesController::class, 'index']);
Route::get('/breakoutfilmes', [App\Http\Controllers\BreakoutFilmesController::class, 'index']);
Route::get('/breakoutseries', [App\Http\Controllers\BreakoutSeriesController::class, 'index']);

