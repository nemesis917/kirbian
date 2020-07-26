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

// rutas de la web //
Route::get('/', 'webPageController@index')->name('web.inicio');
Route::post('catalogo-general','webPageController@jq_webCatalogo');


// Fin de la ruta de la web //

Auth::routes();

Route::group(['prefix' => 'sistema/usuario/', 'middleware' => ['auth', 'adm']], function () {
    Route::get('/', 'usersController@index')->name('sistema.usuario.index');
    Route::post('guardar','usersController@store')->name('sistema.usuario.store');
    Route::get('modificar/sdy8vh4n{id}dvd89vgbd3vd6r5tfv4', 'usersController@edit')->name('sistema.usuario.edit');
    Route::post('modificando/8cgdgff8{id}9fhvfivfhv','usersController@update')->name('sistema.usuario.update');
    Route::get('eliminar/cs9ucsbs{id}duocs90dcd564d3s4', 'usersController@destroy')->name('sistema.usuario.destroy');
    Route::post('cambiar-clave', 'usersController@jq_clave');
});

Route::group(['prefix' => 'sistema/catalogo/',  'middleware' => ['auth']], function () {
    Route::get('/', 'catalogoController@index')->name('sistema.catalogo.index');
    Route::post('valorGardiner','catalogoController@jq_gardiner');
});

Route::group(['prefix' => 'sistema/jeroglifico/',  'middleware' => ['auth']], function () {
    Route::post('guardar-cambios','jeroglificoController@store')->name('sistema.jeroglifico.store');
    Route::post('modificar','jeroglificoController@edit')->name('sistema.jeroglifico.edit');
    Route::post('modificando','jeroglificoController@update')->name('sistema.jeroglifico.update');
    Route::post('verJeroglifico', 'jeroglificoController@jq_consultar');
    Route::post('foto-estandar', 'jeroglificoController@jq_anularFoto');
    Route::post('desactivarJeroglifico', 'jeroglificoController@jq_desactivarJero');
    Route::get('fuentes-paleograficas','jeroglificoController@mostrarFuentes')->name('sistema.jeroflifico.mostrarF');
    Route::get('manejo-comentario/udbod4t6y666sodso6odusfjb78t77sdgbfksdf08sfdugbosd9ftsgdfbsdfu{id}sdt789f','jeroglificoController@manejoComentario')->name('sistema.jeroglifico.comentario');
    Route::post('aprobar-comentario','jeroglificoController@jq_aprobarComentario');
    Route::post('eliminar-comentario','jeroglificoController@jq_eliminarComentario');
    Route::post('cambiar-paleografica','jeroglificoController@jq_cambiarFp');
    Route::post('borrar-paleografica','jeroglificoController@jq_borrarFp');
    Route::post('cargar-comentario/sdiofsdf80s{id}df','jeroglificoController@subirComentario')->name('sistema.comentario.crearComentario');
    Route::post('subir-fuente-p/sdio3fsd{id}f80sdf','jeroglificoController@subirFp')->name('sistema.comentario.subirFp');
});

Route::group(['prefix' => 'control',  'middleware' => ['auth', 'validacion']], function () {
    Route::get('/inicio', 'HomeController@index')->name('home');
});


