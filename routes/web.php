<?php

use Illuminate\Support\Facades\Route;

Route::view('/','home')->name('inicio');
// Route::view('programas','programas')->name('programas');
// Route::get('talleres','App\Http\Controllers\ServiciosController@index')->name('talleres');
Route::get('personas','App\Http\Controllers\PersonaController@index')->name('persona.index');
Route::get('personas/crear','App\Http\Controllers\PersonaController@create')->name('persona.create');
Route::post('personas','App\Http\Controllers\PersonaController@store')->name('persona.store');
Route::get('personas/{nPerCodigo}', 'App\Http\Controllers\PersonaController@show')->name('persona.show');
Route::view('contacto','contacto')->name('contacto');