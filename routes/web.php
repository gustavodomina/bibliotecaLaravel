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

Route::get('/', 'InicioController@index');
/* con cacheo 
Route::get('admin/permiso', 'Admin\PermisoController@index')->name('permiso');*/

/* sin cacheo*/ 
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){
    // Controllers Within The "App\Http\Controllers\Admin" Namespace
    Route::get('permiso', 'PermisoController@index')->name('permiso');
    Route::get('permiso/crear', 'PermisoController@crear')->name('crear_permiso');
    Route::get('menu', 'MenuController@index')->name('menu');
    Route::get('menu/crear', 'MenuController@crear')->name('crear_menu');
    Route::post('menu', 'MenuController@guardar')->name('guardar_menu');
});


   
/*
* codigos de ejemplos
*/
/*Route::get('foo', function () {
    return "Hellow World";
});*/

//Route::get('permiso/{nombre}/{slug?}', 'PermisoController@index');
/*Route::view('permiso', 'permisoView'); // otra forma de rutear llamando a la view por la ruta*/
//Route::get('admin/sistema/permiso', 'PermisoController@index')->name('permiso');

/*Route::get('permiso/{nombre}', function ($nombre) {
    return $nombre;
})->where('nombre', '[A-Za-z]+');*/

