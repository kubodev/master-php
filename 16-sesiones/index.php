<?php

/* 
Sesión: Almacenar y persistir datos del usuario mientras que navega en un sitio web
hasta que cierra sesión o cierra el navegador
*/

// Iniciar la sesión
session_start();

// Variable local
$variable_normal = "soy una cadena de texto";

// Variable de sesion
$_SESSION['variable_persistente'] = "Hola soy una sesion activa";

echo $variable_normal."<br/>";
echo $_SESSION['variable_persistente'];