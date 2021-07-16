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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::name('tourisme')->namespace('')->prefix('/tourisme')->group(function (){
    Route::name('ville')->namespace('')->prefix('/ville')->group(function (){
        Route::get('/list-ville', 'App\Http\Controllers\villeController@index')->name('ville-list');
        Route::post('/add-ville', 'App\Http\Controllers\villeController@store')->name('ville-add');
        Route::get('/edit-ville/{id}', 'App\Http\Controllers\villeController@edit')->name('ville-edit');
        Route::post('/update-ville/{id}', 'App\Http\Controllers\villeController@update')->name('ville-update');
        Route::get('/create-ville', 'App\Http\Controllers\villeController@create')->name('ville-create');
        Route::get('/delete-ville', 'App\Http\Controllers\villeController@delete')->name('ville-delete');
    });
});
