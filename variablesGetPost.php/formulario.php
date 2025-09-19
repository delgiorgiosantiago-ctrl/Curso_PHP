<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <!-- El formulario envia la informacion por GET (no recomendado para datos sensibles) -->
        <!-- <h1> Formulario en PHP por GET</h1>
        <form method="GET" action="respuesta_form.php">
            <label for="nombre">Nombre</label>
            <p><input type="text" name="nombre" /></p>

            <label for="apellido">Apellido</label>
            <p><input type="text" name="apellido" /></p>
            <input type="submit" value="Enviar" />
        </form> -->

        <!-- El formulario envia la informacion por POST -->
        <h1> Formulario en PHP por POST</h1>
        <form method="POST" action="respuesta_form.php">
            <label for="nombre">Nombre</label>
            <p><input type="text" name="nombre" /></p>

            <label for="apellido">Apellido</label>
            <p><input type="text" name="apellido" /></p>
            <input type="submit" value="Enviar" />
        </form>

        
    </body>
</html>