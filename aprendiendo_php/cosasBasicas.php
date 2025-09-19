<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

        <!-- Cosas basicas ---------------------------------------------------------------------------------------------->

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

            echo "<hr>";
        ?>
    
        <!-- Variables ------------------------------------------------------------------------->
        <?php
            echo "<h1>Variables:</h1>";

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
            echo "<hr>";
        ?>

        <!-- Constantes ----------------------------------------------------------------> 
        <?php
            echo "<h1>Constantes:</h1>";

            // Constantes 
            define("NOMBRE", "Victor Robles"); 
            define("WEB", "victorroblesweb.es");

            echo "<h3>".NOMBRE."</h3>";
            echo "<h3>".WEB."</h3>";      
            echo "<hr>";
        ?>  
        
        <!-- Operadores ----------------------------------------------------------------->       
        <?php
            echo "<h1>Operadores:</h1>";

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
            echo "<hr>";
        ?>  

        <!-- Variables superglobales -------------------------------------------------------------------->
        <?php
            echo "<h1>Variables superglobales:</h1>";

            // Variables de servidor
            echo '<h3>';
            echo $_SERVER['REMOTE_ADDR'].'<br/>'; // IP del servidor
            echo '</h3>';

            echo '<h3>';
            echo $_SERVER['SERVER_NAME'].'<br/>'; // Nombre del servidor
            echo '</h3>';

            echo '<h3>';
            echo $_SERVER['SERVER_SOFTWARE'].'<br/>'; // Software del servidor
            echo '</h3>';

            echo '<h3>';
            echo $_SERVER['HTTP_USER_AGENT'].'<br/>'; // Navegador del usuario
            echo '</h3>';

            echo '<h3>';
            echo $_SERVER['REMOTE_ADDR'].'<br/>'; // IP del cliente
            echo '</h3>';
            echo "<hr>";
        ?>

        <!-- Condicionales --------------------------------------------------------------------->
        <?php 
            /*if (condición) {
                código a ejecutar si se cumple la condición
           } else {
                código a ejecutar si no se cumple la condición
           }

           Operadores de comparación:
           == Igual
           === Idéntico
           != Diferente
           <> Diferente
           !== No idéntico
           < menor que
           > mayor que
           <= menor o igual que
           >= mayor o igual que

           Operadores lógicos:
            && AND Y
            || OR O
            ! NOT NO
            and Y
            or O  
            */

            echo "<h1>Condicionales:</h1>";

            // Condicionales
            $color = "rojo"; 

            if($color == "rojo"){
                echo "<h3 style='color:".$color."'>El color es rojo</h3>";
            } else {
                echo "<h3 style='color:".$color."'>El color no es rojo</h3>";
            }
            
            // Operadores de comparación

            $year = 2024;
            if($year == 2024){
                echo "<h3>Estamos en el año 2024</h3>";
            } else {
                echo "<h3>No estamos en el año 2024</h3>";
            }

            $year = 2023;
            if($year < 2024){
                echo "<h3>es un año anterior a 2024</h3>";
            } else {
                echo "<h3>es un año posterior a 2024</h3>";
            }

            $year = 2028;
            if($year != 2024){
                echo "<h3>es un año diferente a 2024</h3>";
            } else {
                echo "<h3>estamos en 2024</h3>";
            }

            $year = 2024;
            if($year  >= 2024){
                echo "<h3>estamos en 2024</h3>";
            } else {
                echo "<h3>es un año anterior a 2024</h3>";
            }
            echo "</br>";
            
            // Ejemplo 2
            $nombre = "Victor";
            $ciudad = "Madrid";
            $continente = "Asia";
            $edad = 47;
            $mayoria_edad = 18;

            if($edad >= $mayoria_edad){
                echo "<h3>$nombre es mayor de edad</h3>";

                if($continente == "Europa"){
                    echo "<h3>vive en $ciudad</h3>";
                } else {
                    echo "<h3>$nombre no es europeo</h3>";
                }
                
            } else {
                echo "<h3>$nombre es menor de edad</h3>";
            }
            echo "</br>";

            // Ejemplo 3
            $dia = 3;

            if($dia == 1){
                echo "<h3>Es lunes</h3  >";
            } elseif($dia == 2){
                echo "<h3>Es martes</h3>";
            } elseif($dia == 3){
                echo "<h3>Es miércoles</h3>";
            } elseif($dia == 4){
                echo "<h3>Es jueves</h3>";
            } elseif($dia == 5){
                echo "<h3>Es viernes</h3>";
            } else {
                echo "<h3>Es fin de semana</h3>";
            }
            echo "</br>";

            // Ejemplo 4 
            $edad = 18;
            $edad2 = 64;
            $edad_oficial = 18;
            if($edad >= $edad_oficial && $edad2 <= 65){
                echo "<h3>Está en edad de trabajar</h3>";
            } else {
                echo "<h3>No está en edad de trabajar</h3>";
            }

            $pais = "España";
            if($pais == "Mexico" || $pais == "España" || $pais == "Colombia"){
                echo "<h3>En este país se habla español</h3>";
            } else {
                echo "<h3>En este país no se habla español</h3>";
            }
            echo "<hr>";
            
            echo "<h1>Switch:</h1>";
            // switch
            $dia = 4;

            switch($dia){
                case 1:
                    echo "<h3>Es lunes</h3>";
                break;
                case 2:
                    echo "<h3>Es martes</h3>";
                break;
                case 3:
                    echo "<h3>Es miércoles</h3>";
                break;
                case 4:
                    echo "<h3>Es jueves</h3>";
                break;
                case 5:
                    echo "<h3>Es viernes</h3>";
                break;
                default:
                    echo "<h3>Es fin de semana</h3>";
            }
            echo "<hr>";

            echo "<h1>GOTO:</h1>";
            // GOTO
            goto marca; // Salta a la etiqueta marca
            echo "<h3>Instrucción 1</h3>";
            echo "<h3>Instrucción 2</h3>";
            echo "<h3>Instrucción 3</h3>";
            echo "<h3>Instrucción 4</h3>";

            marca:
            echo "<h3>Me he saltado 4 echos</h3>";
            echo "<hr>";
        ?>       

        <!-- Bucles --------------------------------------------------------------------->
        <?php
           /* 
            foreach ($array as $valor) {
                código a ejecutar
            }
            */

            echo "<h1>Bucles:</h1>";
            echo "<h1>Bucle while:</h1>";
            // Bucle while
            /* while (condición) {
                código a ejecutar mientras se cumpla la condición
            } */
            $numero = 0;
            while($numero <= 100){
                echo $numero;
                if($numero != 100){
                    echo ", ";
                } else {
                    echo ".";
                }
                $numero++;
            }
            echo "<br/><br/>";

            // Ejemplo 
            if (isset($_GET['numero'])) {  // Comprueba si la variable existe
                $numero = (int)$_GET['numero']; // Convierte la variable a entero
            } else {
                $numero = 1;
            }
            
            echo "<h3>Tabla de multiplicar del numero $numero</h3>";
            $contador = 1;
            while ($contador <= 10) {
                $resultado = $numero * $contador;
                echo "<h4>$numero x $contador = $resultado</h4>";
                $contador++;
            }
            echo "<br/>";

            echo "<h1>Bucle do while:</h1>";
            // Bucle do while
            /*
            do {
                instrucciones a ejecutar
            } while (condición);
            */ 

            $edades = 17;
            $contador = 1;
            do {
                echo "<h3>Tienes acceso al bar $contador</h3>";
                $contador++;
            } while ($edades >= 18 && $contador <= 10);
            echo "<br/>";

            echo "<h1>Bucle for:</h1>";
            // Bucle for
            /* for (inicialización; condición; incremento) {
                código a ejecutar
            } 
            */
            


        ?>


        
    </body>
</html>
