<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <!-- Respuesta del formulario por GET (no recomendado para datos sensibles) -->
        <!-- <h1> Respuesta del Formulario</h1>
        <p>Nombre: <?php // echo $_GET['nombre']; ?></p>
        <p>Apellido: <?php // echo $_GET['apellido']; ?></p>-->

        <?php // var_dump( $_GET );  ?><!-- Muestra toda la informacion que llega por GET -->

        <!-- Respuesta del formulario por POST -->
        <h1> Respuesta del Formulario</h1>  
        <p>Nombre: <?php echo $_POST['nombre']; ?></p>
        <p>Apellido: <?php echo $_POST['apellido']; ?></p>
        <?php var_dump( $_POST );  ?><!-- Muestra toda la informacion que llega por POST -->
    </body>
</html>
