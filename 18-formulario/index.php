<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios PHP y HTML</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="nombre">Nombre:</label>  
        <p><input type="text" name="nombre" disabled pattern="[A-Z a-z]" required placeholder="Mete te Nombre"></p>

        <label for="apellido">Apellido:</label>  
        <p><input type="text" name="apellido" autofocus maxlength="5" value="Apellido"></p>

        <label for="boton">boton</label>  
        <p><input type="button" name="boton" value="boton"></p>

        <label for="sexo">sexo: </label>  
        <p> Hombre: <input type="checkbox" name="sexo" value="hombre" checked>
            Mujer: <input type="checkbox" name="sexo" value="mujer"></p>

        <label for="color">boton</label>  
        <p><input type="color" name="color" ></p>

        <label for="fecha">fecha</label>  
        <p><input type="date" name="fecha" ></p>

        <label for="correo">correo</label>  
        <p><input type="email" name="correo" ></p>

        <label for="archivo">archivo</label>  
        <p><input type="file" name="archivo" multiple></p>
        
        <label for="correo">correo</label>  
        <p><input type="hidden" name="correo" ></p>

        <label for="numero">numero</label>  
        <p><input type="number" name="numero" ></p>

        <label for="pass">contraseña</label>  
        <p><input type="password" name="pass" ></p>

        <label for="continente">continente</label>  
        <p>America del sur: <input type="radio" name="continente" value="America del sur" ></p>
        <p>Europa: <input type="radio" name="continente" value="Europa" ></p>   
        <p>Asia: <input type="radio" name="continente" value="asia" ></p>

        <label for="web">Pagina web</label>  
        <p><input type="url" name="web" ></p>

        <textarea name="" id="" cols="30" rows="10"></textarea>

        peliculas:
        <select name="peliculas" id="peliculas">
            <option value="spiderman">Spiderman</option>
            <option value="La jungla de cristal">La jungla de cristal</option>
            <option value="Gran torino">Gran Torino</option>


        </select>

        <p><input type="submit" value="Enviar"></p>
    </form>
</body>
</html>



