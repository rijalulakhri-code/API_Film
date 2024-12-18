<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FilmController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/categories', [FilmController::class, 'listCategories']);
Route::get('/films', [FilmController::class, 'listFilms']);
Route::get('/films/{id}', [FilmController::class, 'detailFilm']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});