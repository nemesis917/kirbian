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
    return view('welcome');
});



Auth::routes();

Route::group(['prefix' => 'sistema/usuario/', 'middleware' => 'auth'], function () {
    Route::get('/', 'usersController@index')->name('sistema.usuario.index');
    Route::post('guardar','usersController@store')->name('sistema.usuario.store');
    Route::get('modificar/sdy8vh4n{id}dvd89vgbd3vd6r5tfv4', 'usersController@edit')->name('sistema.usuario.edit');
    Route::post('modificando/8cgdgff8{id}9fhvfivfhv','usersController@update')->name('sistema.usuario.update');
    Route::get('eliminar/cs9ucsbs{id}duocs90dcd564d3s4', 'usersController@destroy')->name('sistema.usuario.destroy');
    Route::post('cambiar-clave', 'usersController@jq_clave');
});



Route::get('/home', 'HomeController@index')->name('home');
