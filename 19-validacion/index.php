<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de formulario</title>
</head>
<body>
    <h1>Validar formularios en PHP</h1>

    <?php
    if(isset($_GET['error']))
    {
        $error = $_GET['error'];
        if($error == 'faltan_valores')
        {
            echo '<strong style="color:red;">Introduce todos los datos en el formulario</stong>';
        }
    }
    ?>

    <form action="procesar_formulario.php" method="POST">
        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" required pattern="[A-Za-z]+"><br>

        <label for="apellidos">Apellidos:</label><br>
        <input type="text" name="apellidos" required pattern="[A-Za-z ]+"><br>

        <label for="edad">Edad:</label><br>
        <input type="number" name="edad" required pattern="[0-9]+"><br>

        <label for="email">Email:</label><br>
        <input type="email" name="email" required><br>

        <label for="pass">Contraseña:</label><br>
        <input type="password" name="pass" required><br>

        <input type="submit" value="Enviar">

    </form>
</body>
</html>