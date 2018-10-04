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