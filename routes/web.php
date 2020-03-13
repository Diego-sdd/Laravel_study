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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/create_user', 'Cliente@create')->name('cadastro_cliente');

Route::post('/create_proposta', 'Proposta@create')->name('cadastro_proposta');


Route::post('/edit_proposta', 'Proposta@update')->name('editar_proposta');
Route::get('proposta/{id}', 'Proposta@select_edit')->name('proposta.edit');



Route::get('csv_file/export', 'Export@csv_export')->name('export');
