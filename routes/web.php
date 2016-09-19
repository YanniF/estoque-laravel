<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function() {
	return view('welcome');
});

Route::get('/produtos', 'ProdutoController@lista');
Route::get('/produtos/mostra', 'ProdutoController@mostra');
Route::get('/produtos/novo', 'ProdutoController@novo');//->middleware('auth');//Kernel.php - $routeMiddleware
Route::post('/produtos/adiciona', 'ProdutoController@adiciona');
Route::get('/produtos/remove/{id}', 'ProdutoController@remove');
Route::get('/produtos/editar/{id}', 'ProdutoController@editar');
Route::post('/produtos/atualiza/{id}', 'ProdutoController@atualiza');

Auth::routes();

Route::get('/home', 'HomeController@index');
