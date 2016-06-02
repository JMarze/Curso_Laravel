<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function() {
    Route::resource('categoria', 'CategoriaController');
    Route::resource('post', 'PostController');
});

// Ruta para acceder a los archivos de imagen (Store)
Route::get('post/{nombreImagen}', 'PostController@getImagen')->name('post.imagen');

// PDF
Route::get('post/{post}/reporte', 'PdfController@reporte')->name('post.reporte');


/*Route::get('contacto', function () {
    return view('contacto');
});*/

/*Route::get('contacto', 'ContactoController@contacto');
Route::get('contacto/privado', 'ContactoController@privado');

Route::get('nombre/{nombre?}', function ($nombre = "Marcelo") {
    return "El nombre es: " . $nombre;
});

Route::get('metodos', function(){
    //GET
    $vista = "<form action='/metodos' method='POST'>";
    $vista .= "<input type='submit'/>";
    $vista .= "<input type='hidden' name='_method' value='PUT'>";
    $vista .= "<input type='hidden' name='_token' value='".csrf_token()."'>";
    $vista .= "</form>";
    return $vista;
});

Route::post('metodos', function(){
    //POST
    return "Respuesta POST";
});

Route::put('metodos', function(){
    ///PUT
    return "Respuesta PUT";
});*/

/*Route::get('nombre/{nombre?}/apellido/{apellido}', function ($nombre = "Marcelo", $apellido) {
    return "El nombre es: " . $nombre;
});*/

Route::auth();

Route::get('/home', 'HomeController@index');
