<?php
$error = 'faltan_valores';

if (
    !empty($_POST['nombre']) &&
    !empty($_POST['apellidos']) &&
    !empty($_POST['edad']) &&
    !empty($_POST['email']) &&
    !empty($_POST['pass'])
) {
    $error = 'ok';

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $edad = (int) $_POST['edad'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    //validar el nombre
    if(!is_string($nombre) && !preg_match("/[a-zA-Z ]+/",$nombre))//!preg_match("/[1-9]+/",$nombre)
    {
        $error = 'nombre';
    }
    if(!is_string($apellidos) && !preg_match("/[a-zA-Z ]+/",$apellidos))//!preg_match("/[1-9]+/",$nombre)
    {
        $error = 'apellidos';
    }
    if(!is_int($edad) && !filter_var($edad, FILTER_VALIDATE_INT))//!preg_match("/[1-9]+/",$nombre)
    {
        $error = 'edad';
    }
    if(!is_string($email) && !filter_var($email, FILTER_VALIDATE_EMAIL))//!preg_match("/[1-9]+/",$nombre)
    {
        $error = 'email';
    }
    if(!empty($pass) || strlen($pass)<5))  //!preg_match("/[1-9]+/",$nombre)
    {
        $error = 'pass';
    }
    else {
    $error = 'faltan_valores';
    header("Location:index.php?error=$error");
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        if($error== 'ok'):?>
        <h1>Datos validados coreectamente</h1>
        <p><?=$nombre?></p>
        <p><?=$apellidos?></p>
        <p><?=$edad?></p>
        <p><?=$email?></p>

        
    <?php enid;?>
</body>

</html>