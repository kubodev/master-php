<?php

/* 
    Variable locales: Son las que se definesn dentro de un función y no pueden ser usadas fuera de la función,
    solo estan disponibles dentro. A no ser que hagamos un return

    Variables globales: Las que se declaran fuera de una función y estan disponibles
    dentro y fuera de las funciones.
*/

// Varuable global
$frase = "Ni los genios son tan genios, ni los mediocres tan mediocres";

echo $frase;

function holaMundo()
{
    global $frase;

    echo "<h1>$frase</h1>";

    $year = 2020;
    echo "<h1>$year</h1>";

    return $year;   

}

echo holaMundo();


