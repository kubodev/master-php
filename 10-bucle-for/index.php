<?php

//For

// for(variable_contador, condición, incremente contador)
// {

// }

$resultado = 0;

for($i = 0; $i <=100; $i++)
{
    $resultado = $resultado + $i;
    echo "<p>$resultado</p>";
}

echo "<h1>El resultado es: $resultado</h1>";