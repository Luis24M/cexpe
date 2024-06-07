<?php

use Illuminate\Support\Facades\Route;

Route::view('/','home')->name('inicio');
// Route::view('programas','programas')->name('programas');
// Route::get('talleres','App\Http\Controllers\ServiciosController@index')->name('talleres');
Route::get('personas','App\Http\Controllers\PersonaController@index')->name('persona');
// Route::view('asesoramiento','asesoramiento')->name('asesoramiento');
Route::view('contacto','contacto')->name('contacto');