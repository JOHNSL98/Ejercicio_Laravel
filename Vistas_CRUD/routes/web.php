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

Route::get('/leerview', function () {
    return view('leer');
});

Route::get('/crearview', function () {
    return view('crear');
});

Route::get('/actualizarview', function () {
    return view('actualizar');
});

Route::get('/borrarview', function () {
    return view('borrar');
});

Route::get('/prueba', function () {
    return view('prueba');
});