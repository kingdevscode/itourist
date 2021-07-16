<?php

use App\Http\Controllers\categorieController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'categorie'], function () {
    Route::post('/', [categorieController::class, 'store']);
    Route::post('/{id}', [categorieController::class, 'update']);
    Route::get('/', [categorieController::class, 'index']);
    Route::get('/{id}', [categorieController::class, 'show']);
    Route::delete('/{id}', [categorieController::class, 'destroy']);
});
