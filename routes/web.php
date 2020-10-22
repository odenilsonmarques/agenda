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


Route::get('/agenda','adminController\HomeController@home')->name('agendaHome')->middleware('auth');

Route::get('/cadastro','adminController\ContatoController@cadastrar')->name('addContato')->middleware('auth');
Route::post('/cadastro','adminController\ContatoController@cadastrarAcao');

Route::get('/lista','adminController\ContatoController@listar')->name('listContatos')->middleware('auth');

Route::get('/edita/{id}','adminController\ContatoController@editar')->name('editContato')->middleware('auth');
Route::post('/edita/{id}','adminController\contatoController@editarAcao');

Route::get('/deleta/{id}','adminController\ContatoController@deletar')->name('delContato');

Route::get('/lista','adminController\BuscaController@pesquisar')->name('listContatos')->middleware('auth');




// a rota abaixo foi criada quando foi feita a instalação dos pacotes de autenticacao do laravel

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
