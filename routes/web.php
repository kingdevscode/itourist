<?php

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
    return view('landing');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/kit', function () {
    return view('app');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::name('admin.')->namespace('')->prefix('/admin')->group(function(){
    Route::name('categorie.')->namespace('')->prefix('/categorie')->group(function (){
        Route::get('detail-categorie/{id}', 'App\Http\Controllers\categorieController@edit')->name('categorie-edit');
        Route::post('/create-categorie', 'App\Http\Controllers\categorieController@store')->name('categorie-store');
        Route::get('listing-categorie', 'App\Http\Controllers\categorieController@index')->name('categorie-liste');
        Route::get('/delete-categorie/{id}', 'App\Http\Controllers\categorieController@destroy')->name('categorie-delete');
        Route::get('/categorie', 'App\Http\Controllers\categorieController@create')->name('categorie-create');
        Route::get('edit-categorie/{id}', 'App\Http\Controllers\categorieController@show')->name('categorie-show');
        Route::post('update-categorie/{id}', 'App\Http\Controllers\categorieController@update')->name('categorie-update');
    });
});
