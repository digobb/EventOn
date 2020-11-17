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

Auth::routes();

