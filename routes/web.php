<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

/*Comienza RUTAS CRUD*/ 

Route::get ('/show', 'Crud@index');
Route::get('/insert', 'Crud@create');
Route::get('/detail/{id}', 'Crud@show');
Route::get('/delete/{id}', 'Crud@destroy');
Route::post('/save', 'Crud@store');
Route::post('/update', 'Crud@update');

Route::get ('/poets', 'poetscircle@index');
Route::get('/insertar', 'poetscircle@create');
Route::get('/mostrar/{id}', 'poetscircle@show');
Route::get('/del/{id}', 'poetscircle@destroy');
Route::post('/guardar', 'poetscircle@store');
Route::post('/act', 'poetscircle@update');
/*Termina RUTAS CRUD*/ 

Route::get('/', 'controlador@login');

Route::get('/leo', [
    'uses'=>'controlador@leo',
    'as'=>'Leo']);


Route::get('/eli', [
    'uses'=>'controlador@eli',
    'as'=>'eli']);

Route::get('/fri', [
    'uses'=>'controlador@fri',
    'as'=>'fri']);

Route::get('/pic', [
    'uses'=>'controlador@pic',
    'as'=>'pic']);

Route::get('/van', [
    'uses'=>'controlador@van',
    'as'=>'van']);

Route::post('/valida', 'controlador@validarlogin');
    