<?php

//CLASE 3 - Ejercicio 2)c

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    public function getNombreCompleto()
    {
        //Ejercicio 3)c
        return $this->first_name . ' ' . $this->last_name;
    }
}
