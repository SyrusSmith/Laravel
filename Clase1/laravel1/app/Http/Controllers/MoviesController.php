<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function create()
    {
        return view('movies');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'titulo' => 'required|unique:movie|max:255',
            'rating' => 'required|decimal-min:1|decimal-max:5|max:1',
            'premios' => 'required|integer-min:0|integer-max:100|max:3',
            'duracion' => 'required',
            'dia' => 'required',
            'mes' => 'required',
            'anio' => 'required'
        ], [
            'titulo.required' => 'El campo NO puede estar vacío'
        ], [
            'rating.required' => 'El valor debe estar entre 1.0 y 5.0'
        ], [
            'premios.required' => 'El valor debe estar entre 0 y 100'
        ], [
            'duracion.required' => 'El valor duración es requerido'
        ], [
            'dia.required' => 'El día es obligatorio'
        ], [
            'mes.required' => 'El mes es obligatorio'
        ], [
            'anio.required' => 'El año es obligatorio'
        ]);
    }
}
