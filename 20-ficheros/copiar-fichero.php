<?php
//copiar un archivo
//copy('fichero_texto.txt','fichero_copiado.txt') or die ("Error al copiar");

//rename
//rename('fichero_copiado.txt', 'archivito_recopiadito.txt');

//Eliminar
//unlink('archivito_recopiadito.txt') or die ('Error al borrar');

//comprobar si un archivo existe o no
if(file_exists('fichero_texto.txt'))
{
    echo 'El archivo existe';
}else{
    echo 'El archivo no existe';
}


?>