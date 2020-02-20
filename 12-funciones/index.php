<?php

/* 
Funciones

Una función es un conjuntos de instrucciones agrupados bajo un nombre concreto
y que pueden reutilzarse solamente invocando a la función, tantas veces como queramos.

function nombreDeMiFuncion($mi_parametro)
{
    //Bloque / conjunto de intrucciones
}


nombreDeMiFuncion($mi_parametro);
*/

//Ejemplo 1

function muetraNombres()
{
    echo "Moises Magna <br>";
    echo "Washina <br>";
}

// Invocar funcion

muetraNombres();

//Ejemplo 2

function tablas($numero)
{
    echo "<h3> Tabla de multiplicar de número: $numero </h3>";
    for($i = 1; $i <= 10; $i++)
    {
        $operacion = $numero * $i;

        echo "$numero x $i = $operacion <br>";
    }

}

if(isset($_GET['numero']))
{
    tablas($_GET['numero']);
}
else 
{
    echo "No hay número para sacar la tabla";
}


for($i = 0; $i <= 10; $i++)
{
    tablas($i);
}
