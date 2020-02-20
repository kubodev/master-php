<?php 
// Constantes
// Es un contenedor de información que no puede varias

define('nombre', 'Moises Magna');
define('web','tuespaciodigital.cl');

echo '<h1>'.nombre.'</h1>';
echo '<h1>'.web.'</h1>';

//variable

$web = 'miortraweb.cl';
$web = 'izipizi.cl';

echo '<h1>'.$web.'</h1>';

//contantes predefinidas

echo PHP_VERSION;
echo '<br>';
echo PHP_OS;
echo '<br>';
echo PHP_EXTENSION_DIR;
echo '<br>';
echo __LINE__;
echo '<br>';
echo __FILE__;
echo '<br>';
echo __FUNCTION__;
echo '<br>';
echo __CLASS__;
echo '<br>';
echo __METHOD__;
echo '<br>';
echo PHP_WINDOWS_VERSION_PLATFORM;
echo '<br>';


?>