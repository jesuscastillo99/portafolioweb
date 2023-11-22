<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('inicio');
})->name('inicio');

Route::get('/sobremi', function () {
    return view('sobremi');
})->name('sobremi');

Route::get('/portafolio', function () {
    return view('portafolio');
})->name('portafolio');

Route::get('/educacion', function () {
    return view('educacion');
})->name('educacion');

Route::get('/habilidades', function () {
    return view('habilidades');
})->name('habilidades');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');