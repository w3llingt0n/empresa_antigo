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

Route::get('admin','EmpresaController@index')->name('index');

Route::prefix('admin')->group(function (){
    Route::get('clientes', 'EmpresaController@listar')->name('clientes');
    Route::get('cadastrar', 'EmpresaController@cadastrar')->name('cadastrar');
});
