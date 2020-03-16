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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('cliente/{id}', 'Cliente@select_edit')->name('cliente.edit');
Route::post('/create_user', 'Cliente@create')->name('cadastro_cliente');
Route::post('/edit_cliente', 'Cliente@update')->name('editar_cliente');

Route::get('proposta/{id}', 'Proposta@select_edit')->name('proposta.edit');
Route::get('proposta/delete/{id}', 'Proposta@delete')->name('proposta.delete');
Route::post('/edit_proposta', 'Proposta@update')->name('editar_proposta');
Route::post('/create_proposta', 'Proposta@create')->name('cadastro_proposta');

Route::get('/storage/app/upload/{id}', 'Proposta@download')->name('downloadfile');
Route::get('csv_file/export', 'Export@csv_export')->name('export');
