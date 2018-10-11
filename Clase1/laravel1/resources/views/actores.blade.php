<?php

//CLASE 3 - Ejercicio 3)b

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="{{ route('actor.search') }}" method="GET">
        @csrf
        <input type="text" name="search">
        <input type="submit" name="Enviar">

        @if (count($errors) > 0)
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </form>
    <ul>
        @foreach($actores as $actor)
            <li><a href="{{ route('actor.show', $actor->id) }}">
                {{$actor->getNombreCompleto()}}
            </a></li>
        @endforeach
    </ul>
</body>
</html>