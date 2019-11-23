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

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get(
    '/',
    function()
    {
        return 'Hola, aquí estoy en la pagina de inicio!';
    }
);
Route::get(
    '/quienessomos',
    function()
    {
        return 'Hola, aquí estoy en la pagina de quienes somos!';
    }
);
//para colocar un parametro por defecto se coloca 
//la interrogante al final del nombre del parametro {nombre?}
//y se le da un valor por defecto al parametro de la 
//función que maneja la ruta $nombre ='invitado'
Route::get(
    '/saludar/{nombre?}',
    function($nombre ='Invitado')
    {
        return "Hola $nombre, aquí estoy en la pagina de saludos!";
    }
);*/
//Segunda parte
/*Route::get(
    '/proyectos',
    function()
    {
        return 'Página de proyectos';
    }
)->name('desarrollos');
//metodo name (...->name('nombre')) abstrae una ruta
Route::get(
    '/',
    function()
    {
        $desarrollosURl =route('desarrollos');//empleo del metodo name
        echo "
            <a href='$desarrollosURl'>Proyecto A</a><br>
            <a href='$desarrollosURl'>Proyecto B</a><br>
            <a href='$desarrollosURl'>Proyecto C</a><br>
            <a href='$desarrollosURl'>Proyecto D</a><br>
        ";
    }
);*/
//Tercera parte
//haciendo uso de la funcion view se 
//retornan las vista desde el origen comun 
//(resources/views/*)
//sintaxis para sub directorios return view(‘proyectos.proyecto_a’);
//donde proyectos es el nombre de la sub carpeta
Route::get(
    '/',
    function()
    {
        return view('home');
    }
)->name('inicio');