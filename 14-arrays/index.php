<?php

/* 
ARRAYS

Un array es una colección o un conjunto de datos/valores, bajo un unico nombre,
Para acceder a esos valores podemos usar un índice numérico o alfanumérico

*/

$pelicula = "Batman";

$peliculas = array('batman','Spiderman','El señor de los anillos');
$cantantes = ['2pac','Drake','JLo'];

//arrays asociativos
$personas = array(
    'nombre' => 'Moises',
    'apellidos' => 'Magna Gutierrez',
    'web' => 'espaciodigital.cl'

); 

var_dump($personas['web']);

// Recorrer con FOR

echo "<h1>Listado de peliculas</h1>";

echo "<ul>";
for($i = 0; $i < count($peliculas); $i++)
{
    echo "<li>".$peliculas[$i]."</li>";
}
echo "</ul>";

// Recorrer con Foreach
echo "<h1>Listado de peliculas</h1>";

echo "<ul>";
foreach($cantantes as $cantante)
{
    echo "<li>".$cantante."</li>";
}
echo "</ul>";

// Arrays multidimensionales

$contactos = array(
    array(
        'nombre' => 'Antonio',
        'email' => 'antonio@antonio.com'
    ),
    array(
        'nombre' => 'Washi',
        'email' => 'washi@washi.com'
    ),
    array(
        'nombre' => 'kubo',
        'email' => 'kubo@kubo.com'
    )


    );

foreach($contactos as $key => $contacto)
{
    var_dump($contacto['nombre']);
}


?>