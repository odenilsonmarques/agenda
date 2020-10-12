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
    return view('adminViews.agenda');
});

Route::get('/cadastro','adminController\ContatoController@cadastrar')->name('addContato');
Route::post('/cadastro','adminController\ContatoController@cadastrarAcao');

Route::get('/lista','adminController\ContatoController@listar')->name('listContatos');

Route::get('/edita/{id}','adminController\ContatoController@editar')->name('editContato');
Route::post('/edita/{id}','admincontroller\contatoController@editarAcao');

Route::get('/deleta/{id}','adminController\ContatoController@deletar')->name('delContato');



    

