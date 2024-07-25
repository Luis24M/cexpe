<?php
use Illuminate\Support\Facades\Route;

Route::view('/','home')->name('inicio');
Route::resource('personas','App\Http\Controllers\PersonaController')->names('personas')->middleware('auth');

Route::view('contacto','contacto')->name('contacto');
Route::post('contacto','App\Http\Controllers\ContactoController@store');
Auth::routes(['register' => false]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');