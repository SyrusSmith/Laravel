<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//CLASE 2 - 05/10/2018

class PeliculasController extends Controller
{
    public function buscarPeliculasId($id){
        $peliculas = [
            1 => "Toy Story",
            2 => "Buscando a Nemo",
            3 => "Avatar",
            4 => "Star Wars: Episodio V",
            5 => "Up",
            6 => "Mary and Max"
            ];
            
            return $peliculas[$id];
    }

    public function buscarPeliculasNombre($nombre){
        $peliculas = [
            1 => "Toy Story",
            2 => "Buscando a Nemo",
            3 => "Avatar",
            4 => "Star Wars: Episodio V",
            5 => "Up",
            6 => "Mary and Max"
            ];
            
            foreach ($peliculas as $pelicula)
            {
                if (strtolower($nombre) === strtolower($pelicula))
                {
                    return $pelicula;
                }
            }
            return "No se ha encontrado la película";
    }

    public function buscarPeliculasNombreFor($nombre)
    {
        $peliculas = [
            1 => "Toy Story",
            2 => "Buscando a Nemo",
            3 => "Avatar",
            4 => "Star Wars: Episodio V",
            5 => "Up",
            6 => "Mary and Max"
            ];

            $nombreFiltrado = strtolower(str_replace(' ', '', $nombre));
            
            for ($i = 1; $i < count($peliculas); $i++)
            {
                $peliculaFiltrada = strtolower(str_replace(' ', '', $peliculas[$i]));
                if ($nombreFiltrado === $peliculaFiltrada)
                {
                    return $peliculas[$i];
                }
            }
            return "No se ha encontrado la película";
    }

    public function index()
    {
        $peliculas = [
            1 => "Toy Story",
            2 => "Buscando a Nemo",
            3 => "Avatar",
            4 => "Star Wars: Episodio V",
            5 => "Up",
            6 => "Mary and Max"
            ];
            
        return view('peliculas')->with('peliculas', $peliculas);
    }
}

