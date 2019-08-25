<?php

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
    return view('index');
})->name('inicio');

Route::get('/concepto', function(){
    return view('concepto');
})->name('concepto');

Route::get('/admin', function(){
    return view('login');
})->middleware('guest')->name('admin');

Route::post('/login', 'LoginController@login')->name('login');
Route::get('/logout', 'LoginController@logout')->name('logout');

Route::group(['prefix' => '/novedades'], function(){
    Route::get('/', 'NovedadesController@index')->name('novedades.index');

    Route::get('/show/{id}', 'NovedadesController@show')->name('novedades.ver');
    
    Route::get('/redactar', 'NovedadesController@write')
        ->name('novedades.redactar')
        ->middleware('auth');

    Route::get('/editar/{id}', 'NovedadesController@edit')
        ->name('novedades.editar')
        ->middleware('auth');
}); 


