<?php


/* 
Cookie: Es un fichero que se almacena en el ordenador del usuario que visita la web,
con el fin de recordar datos o rastrear el comportamiento del mismo en la web
*/

// Crear cookie

//setcookie("nombre","Valor que solo puede ser  texto", caducidad, ruta, dominio);

// Cookie
setcookie("micookie", "valor de mi galleta");

//Cookie con expiración
setcookie("unyear","valor de mi cookie de 365 días", time()+(60*60*24*365));

?>

<a href="ver_cookies.php">Ver las galletas</a>
