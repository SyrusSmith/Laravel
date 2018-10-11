<?php

//CLASE 3 - Ejercicio 3)a

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Actor; //para poder usar APP\Actor

class ActorController extends Controller
{
    public function directory()
    {
        $actores = Actor::all();

        return view('actores', compact('actores')); //compact, función de php, te crea un array con el nombre que le pases
    }

    public function show($id)
    {
        $actor = Actor::find($id);

        return view('actor', compact('actor'));
    }

    //CLASE 4 Ej 4)a de la clase 3
    public function search(Request $request)
    {
        $this->validate($request, [
            'search' => 'required'
        ], [
            'search.requiered' => 'El campo no puede estar vacío'
        ]);
        //dd($request);

        //Ej 4)c de la clase 3
        $actores = Actor::where('first_name', 'LIKE', '%' . $request->input('search'))->get();

        return view('actores', compact('actores'));
    }
}
