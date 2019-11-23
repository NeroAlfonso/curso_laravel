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
$misProyectos =
[
    ['titulo'=>'Laravel'],
    ['titulo'=>'Slim'],
    ['titulo'=>'Otro']
];
Route::view('/', 'inicio')->name('inicio');
Route::view('/quienessomos', 'quienes')->name('quienes');
Route::view('/proyectos', 'proyectos', ['proyectos'=>$misProyectos])->name('proyectos');
Route::view('/contacto', 'contacto')->name('contacto');

