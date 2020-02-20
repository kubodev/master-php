<?php

function calculadora($numero1, $numero2, $negrita = false)
{
    //conjunto de instrucciones a ejecutar
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multi = $numero1 * $numero2;
    $division = $numero1 / $numero2;

    $cadena_texto = "";

    if($negrita)
    {
        $cadena_texto .= "<h1>";
    }

    $cadena_texto .= "Suma: $suma <br>";
    $cadena_texto .= "Resta: $resta <br>";
    $cadena_texto .= "Multiplicación: $multi <br>";
    $cadena_texto .= "División: $division <br>";
    $cadena_texto .= "<hr>";

    if($negrita)
    {
        $cadena_texto .= "</h1>";
    }

    return $cadena_texto;
}

echo calculadora(10, 30, true);
echo calculadora(5, 10);
echo calculadora(7, 2);
echo calculadora(22, 17);

