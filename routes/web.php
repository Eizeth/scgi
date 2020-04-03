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

//Route::get('/name/{name}/app/{app}', function($name, $app){
//	return 'hola soy '.$name . $app;
//});
//Route::get ('/mi_primer_ruta', function($name) {

//	return 'hola soy'.$name;

//});

Route::resource('/principal', 'principalcontroller');
Route::resource('/sucursal', 'sucurcontroller');
Route::resource('/producto','productoController');
Route::resource('/categorias','CategoriasController');
Route::resource('/user','UserController');
Route::resource('/encargados','EncargadosController');
Route::resource('pedido','PedidoController');
//Route::resource('/tareas', 'TareasController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
