<?php

/*
    Bucle while

    Estructura de contyrol que itera o repite la ejecución de una serie de instrucciones
    tantas veces como sea necesario, en base a un condición

    while(condición)
    {
        bloque de instrucciones 
        otra instrucción
    }
*/

$numero = 0;

// while($numero <= 100)
// {
//     echo "<p>$numero</p>";

//     $numero++;
// }

do {
    echo "Hola mundo";
    $numero++;
}
while($numero >= 8);