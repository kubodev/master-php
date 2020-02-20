<?php
    /*
    Tipos de datos
    Entero (int / integer) = 99
    Coma flotante / decimales (float / double) = 3,45
    Cadenas de carácteres (string) = "Hola yo soy un string"
    Boleano (bool) = 1 0 true false
    null
    Array (Colección de datos)
    objetos
    */

    $numero = 100;
    $decimal = 27.9;
    $texto = "Soy un texto";
    $verdadero = true;
    $nula = null;
    echo gettype($numero);
    echo '<br>';
    echo gettype($decimal);
    echo '<br>';
    echo gettype($texto);
    echo '<br>';
    echo gettype($verdadero);
    echo '<br>';
    echo gettype($nula);

    // Debuggear

    $mi_nombre[] = "Moises Magna del Flow";
    $mi_nombre[] = "Moises Magna del Flow";

    var_dump($mi_nombre);


?>