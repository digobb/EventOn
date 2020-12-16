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
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

/*
//a rota /home executa => HomeController@index
Route::get('/home', 'AtoresController@index')->name('home');

//grupo de rotas de atores
Route::group(['prefix' => 'atores', 'where' => ['id'=>'[0-9]+']], function () {
    //a rota /atores executa => AtoresController@index
    Route::get('',      ['as'=>'atores',     'uses'=>'AtoresController@index']);

    //a rota /create executa => AtoresController@create
    Route::get('create', ['as'=>'atores.create',     'uses'=>'AtoresController@create']);

    //a rota  atores/{id}/destroy executa => AtoresController@destroy
    Route::get('{id}/destroy', ['as'=>'atores.destroy',     'uses'=>'AtoresController@destroy']);

    //a rota  atores/{id}/edit executa => AtoresController@edit
    Route::get('{id}/edit', ['as'=>'atores.edit',     'uses'=>'AtoresController@edit']);

    //a rota  atores/{id}/update executa => AtoresController@update
    Route::put('{id}/update', ['as'=>'atores.update',     'uses'=>'AtoresController@update']);

    //a rota /store executa => AtoresController@store
    Route::post('store', ['as'=>'atores.store',     'uses'=>'AtoresController@store']);

});
*/

Route::group(['prefix' => 'cidades', 'where' => ['id'=>'[0-9]+']], function () {
    Route::get('',      ['as'=>'cidades',     'uses'=>'CidadesController@index']);
    Route::get('create', ['as'=>'cidades.create',     'uses'=>'CidadesController@create']);
    Route::get('{id}/destroy', ['as'=>'cidades.destroy',     'uses'=>'CidadesController@destroy']);
    Route::get('{id}/edit', ['as'=>'cidades.edit',     'uses'=>'CidadesController@edit']);
    Route::put('{id}/update', ['as'=>'cidades.update',     'uses'=>'CidadesController@update']);
    Route::post('store', ['as'=>'cidades.store',     'uses'=>'CidadesController@store']);
});

Route::group(['prefix' => 'clientes', 'where' => ['id'=>'[0-9]+']], function () {
    Route::get('',      ['as'=>'clientes',     'uses'=>'ClientesController@index']);
    Route::get('create', ['as'=>'clientes.create',     'uses'=>'ClientesController@create']);
    Route::get('{id}/destroy', ['as'=>'clientes.destroy',     'uses'=>'ClientesController@destroy']);
    Route::get('{id}/edit', ['as'=>'clientes.edit',     'uses'=>'ClientesController@edit']);
    Route::put('{id}/update', ['as'=>'clientes.update',     'uses'=>'ClientesController@update']);
    Route::post('store', ['as'=>'clientes.store',     'uses'=>'ClientesController@store']);
});

Route::group(['prefix' => 'ingressos', 'where' => ['id'=>'[0-9]+']], function () {
    Route::get('',      ['as'=>'ingressos',     'uses'=>'IngressosController@index']);
    Route::get('create', ['as'=>'ingressos.create',     'uses'=>'IngressosController@create']);
    Route::get('{id}/destroy', ['as'=>'ingressos.destroy',     'uses'=>'IngressosController@destroy']);
    Route::get('{id}/edit', ['as'=>'ingressos.edit',     'uses'=>'IngressosController@edit']);
    Route::put('{id}/update', ['as'=>'ingressos.update',     'uses'=>'IngressosController@update']);
    Route::post('store', ['as'=>'ingressos.store',     'uses'=>'IngressosController@store']);
});

Route::group(['prefix' => 'categorias', 'where' => ['id'=>'[0-9]+']], function () {
    Route::get('',      ['as'=>'categorias',     'uses'=>'CategoriaController@index']);
    Route::get('create', ['as'=>'categorias.create',     'uses'=>'CategoriaController@create']);
    Route::get('{id}/destroy', ['as'=>'categorias.destroy',     'uses'=>'CategoriaController@destroy']);
    Route::get('{id}/edit', ['as'=>'categorias.edit',     'uses'=>'CategoriaController@edit']);
    Route::put('{id}/update', ['as'=>'categorias.update',     'uses'=>'CategoriaController@update']);
    Route::post('store', ['as'=>'categorias.store',     'uses'=>'CategoriaController@store']);
});
Auth::routes();

