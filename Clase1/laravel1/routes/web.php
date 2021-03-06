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

// CLASE 1 - 03/10/2018

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post/{post_id}/comments/{comment_id?}', function ($post_id, $comment_id = null) {
        return $comment_id ? $comment_id : "No hay comentario"; //if ternario

        return $comment_id ?: "No hay comentario"; //sólo si las dos variables son las mismas, en éste tipo de if los : reemplaza el tener que escribir la nueva variable
});

//Ejercicio 2)a

Route::get('/miPrimeraRuta', function() {
    return "Creé mi primera ruta";
});


//Ejerciocio 2)b
Route::get('/resultado/{numero}/resultado2/{numero2?}', function($numero, $numero2 = null){
    if($numero != null && $numero2 != null){
        $numero3 = $numero*$numero2;
        if ($numero3%2==0){
        return "El resultado es $numero3 y el número es par";
    } else {
        return "El resultado es $numero3 y el número es impar";
    }
} else {
    if ($numero%2===0){
        return "El número es $numero y es par";
    } else {
        return "El número es $numero y es impar";
    }
}
});

//Con if ternario
Route::get('/resultado/{numero}/resultado2/{numero2?}', function($numero, $numero2 = null){
    if(!is_null ($numero2)){
        return $numero * $numero2;
    }
    return $numero %2 ? "es par" : "es impar";
});


//CLASE 2 - 05/10/2018

Route::get('/peliculas/{id}', 'PeliculasController@buscarPeliculasId');

Route::get('/peliculas/buscar/{nombre}', 'PeliculasController@buscarPeliculasNombre');

Route::get('/peliculas/buscar/for/{nombre}', 'PeliculasController@buscarPeliculasNombreFor');

Route::get('/peliculas', 'PeliculasController@index');


//CLASE 3 Ej 3)a - 08/10/2018

Route::get('/actores', 'ActorController@directory');

Route::get('/actor/{id}', 'ActorController@show');

//CLASE 4 Ej 4)a de la clase 3

Route::get('/actores', 'ActorController@directory')->name('actor.index');

Route::get('/actor/buscar', 'ActorController@search')->name('actor.search');

Route::get('/actor/{id}', 'ActorController@show')->name('actor.show')->where('id', '[0-9]+');

//Ej 1) de la clase 4

Route::get('/movies/create', 'MoviesController@create')->name('movies.create');

Route::post('/movies/create', 'MoviesController@store')->name('movies.store');