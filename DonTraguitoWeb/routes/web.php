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

//Route::get('/', function () {
//    return view('productos.index');
//});

Route::get('/','ProductosController@index');
//Route::get('/usuarios/create','UsuariosController@create');
Route::resource('usuarios', 'UsuariosController');
Route::resource('productos', 'ProductosController');
Route::resource('pedidos', 'PedidosController');
Route::resource('detalles', 'DetallesController');
