<?php

function getNombre($nombre)
{
    $texto = "El nombre es: $nombre";
    return $texto;
}

function getApelllidos($apellidos)
{
    $texto = "Los apellidos son: $apellidos";
    return $texto;
}

function devuelveElNombre($nombre, $apellidos)
{
    $texto = getNombre($nombre)
              ."<br>"
              .getApelllidos($apellidos);
    return $texto;
}

echo devuelveElNombre("Moises", "Magna");
echo "<br>";
echo devuelveElNombre("Alba", "La Washita");