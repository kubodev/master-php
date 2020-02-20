<?php


/*
Condicional if

    IF (condición) {
        intrucciones
    }else{
        otras instrucciones
    }

    //Operadores de comparación
    == igual 
    === identico
    != diferente
    <> diferente
    !== no identico
    < menor que
    > mayor que
    <= menor o igual que
    >= mayor o igual que



*/

$color = "verde";

if($color == "rojo")
{
    echo "El color es rojo";
}
else{
    echo "El color no es rojo";
}

$year = 2019;

if($year == 2019){
    echo "estamos en 2019";
}else{
    echo "No estamos en 2019";
}

$dia = 1;

switch($dia){
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    
}
echo "<br>";
//GOTO
goto marca;

echo "<h3>Instrucción1</h3>";
echo "<h3>Instrucción1</h3>";
echo "<h3>Instrucción1</h3>";
echo "<h3>Instrucción1</h3>";

marca: "Me he saltado 4 echos";