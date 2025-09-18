<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

        <!-- Cosas basicas -->

        <!-- 
            TIPOS DE DATOS: 
            Entero (int / integer) = 99 
            Coma flotante / decimales (float / double) = 3.45 
            Cadenas (string) = "Hola yo soy un string" 
            Boleano (bool) = true false null 
            Array (Coleccion de datos) 
            Objetos 
        -->

        <?= "Hola mundo con PHP"; ?>  <!--Forma corta de imprimir en pantalla sin usar echo.-->

        <h1>Master en PHP</h1> 

        <?php 
            echo "<h3>Aprendiendo PHP</h3>";
            echo "<ul>
                    <li>Variables</li>
                    <li>Condicionales</li>
                    <li>Bucles</li>
                    <li>Funciones</li>
                </ul>";
        
            echo "<p>Esto es un parrafo escrito desde PHP</p>";      

        
        ?>
    
        <!-- Variables -->
        <?php
            $variable1 = "Hola soy una variable";
            $numero = "200";
            echo "<p>$variable1</p>";
            echo "<p>$numero</p>";
        

            $numero_hola = 100; 
            $decimal = 27.9; 
            $texto = "Soy un texto y este es el numero $numero_hola"; 
            $verdadero = false; 
            $nula = null; 

            echo $texto;

            //echo gettype ($nula); /* Devuelve el tipo de dato que es la variable */
            echo "<br>";
            
            // Debugear 
            $mi_nombre[]= "Victor Robles WEB"; 
            $mi_nombre[]= "Victor Robles WEB";
            var_dump($mi_nombre);
        ?>

        <!-- Constantes --> 
        <?php
            // Constantes 
            define("NOMBRE", "Victor Robles"); 
            define("WEB", "victorroblesweb.es");

            echo "<h1>".NOMBRE."</h1>";
            echo "<h3>".WEB."</h3>";        
        ?>  
        
        <!-- Operadores -->       
        <?php
            // Operadores aritméticos

            $numero1 = 55;
            $numero2 = 33;

            echo 'Suma: '. ($numero1+$numero2).'<br/>';
            echo 'Resta: '. ($numero1-$numero2).'<br/>';
            echo 'Multiplicación: '.($numero1*$numero2).'<br/>';
            echo 'División: '.($numero1/$numero2).'<br/>';
            echo 'Resto: '.($numero1%$numero2).'<br/><br/>';


            // Operadores de Incremento y Decremento

            $numero1 = 101;
            $numero2 = 103;

            $numero1++;
            $numero2--;
            echo 'Incremento: '.$numero1.'<br/>';
            echo 'Decremento: '.$numero2.'<br/><br/>';


            // Operadores de asignación
                $edad = 55;
                echo $edad.'<br/>';
                echo $edad += 5; // $edad = $edad + 5
            
        ?>  

        <!-- Variables superglobales -->
        <?php
            // Variables de servidor
            echo '<h1>';
            echo $_SERVER['REMOTE_ADDR'].'<br/>'; // IP del servidor
            echo '</h1>';

            echo '<h1>';
            echo $_SERVER['SERVER_NAME'].'<br/>'; // Nombre del servidor
            echo '</h1>';

            echo '<h1>';
            echo $_SERVER['SERVER_SOFTWARE'].'<br/>'; // Software del servidor
            echo '</h1>';

            echo '<h1>';
            echo $_SERVER['HTTP_USER_AGENT'].'<br/>'; // Navegador del usuario
            echo '</h1>';

            echo '<h1>';
            echo $_SERVER['REMOTE_ADDR'].'<br/>'; // IP del cliente
            echo '</h1>';
        ?>

        
    </body>
</html>
