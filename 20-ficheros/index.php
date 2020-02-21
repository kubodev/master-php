<?php

//abrir archivo
$archivo = fopen("fichero_texto.txt", "a+");

//leer contenido
while(!feof($archivo))
{
    $contenido = fgets($archivo);
    echo $contenido."<br>";
}

//Escribir
fwrite($archivo, "Soy un texto metido desde php");

//cerrar archivo
fclose($archivo);

?>