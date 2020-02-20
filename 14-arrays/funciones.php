<?php

$cantantes = ['2pac','Drake','JLo','Aisimod'];


//Ordenar
asort($cantantes);//ordena orden alfabetico
arsort($cantantes);
sort($cantantes);//Ordena números

var_dump($cantantes);

// añadir cosas a un array

$cantantes[] = "Natos";
array_push($cantantes,"Waor");

//eliminar elementos array
array_pop($cantantes);
unset($cantantes[2]);

//aleatorio

array_rand($cantantes);

//Dar vuelta

array_reverse($cantantes);

//Buscar en un array

array_search('Drake',$cantantes);

//Contar numero de elementos

echo count($cantantes);

echo sizeof($cantantes);

var_dump($cantantes);