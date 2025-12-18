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

            $resultado = 0;
            for ($i = 0; $i <= 100; $i++) { 
                $resultado += $i;
            }
            echo "<h3>El resultado es: $resultado</h3>";
            echo "<br/>";

            // Ejemplo tabla de multiplicar
            if (isset($_GET['numero'])) {  // Comprueba si la variable existe
                $numero = (int)$_GET['numero']; // Convierte la variable a entero
            } else {
                $numero = 1;
            }

            echo "<h3>Tabla de multiplicar del numero $numero</h3>";
            for ($contador = 1; $contador <= 10; $contador++) {
                $resultado = $numero * $contador;
                echo "<h4>$numero x $contador = $resultado</h4>";
            }
            echo "<hr/>";
        ?>

        <!-- Funciones --------------------------------------------------------------------->
        <?php
        // Funciones
        // Una función es un bloque de código que se puede reutilizar
        /* function nombreDeLaFuncion($parametro1, $parametro2) {
            instrucciones a ejecutar
            return devuelve un valor
        } */

        echo "<h1>Funciones:</h1>";
        function muestraNombres(){
            echo "<h3>Victor Robles</h3>";
            echo "<h3>David Perez</h3>";
            echo "<h3>Juan Gomez</h3>";
        }   
        
        muestraNombres(); // Llamada a la función
        echo "<br/>";

        // Ejeplo 2
        function tabla($numero){
            echo "<h3>Tabla de multiplicar del numero $numero</h3>";
            for ($contador = 1; $contador <= 10; $contador++) {
                $resultado = $numero * $contador;
                echo "<h4>$numero x $contador = $resultado</h4>";
            }
        }
        tabla(5); // Llamada a la función

        for ($i=0; $i <= 3 ; $i++) { 
            tabla($i); // Llamada a la función
        }
        echo "<hr/>";

        // Ejemplo 3
        function calculadora($numero1, $numero2, $negrita = false){
            
            $suma = $numero1 + $numero2;
            $resta = $numero1 - $numero2;
            $multiplicacion = $numero1 * $numero2;
            $division = $numero1 / $numero2;

            if($negrita){
                echo "<h1>";
            }

            echo "<h3>Calculadora</h3>";
            echo "<h4>Suma: $suma</h4>";
            echo "<h4>Resta: $resta</h4>";
            echo "<h4>Multiplicación: $multiplicacion</h4>";
            echo "<h4>División: $division</h4>";

            if($negrita){
                echo "</h1>";
            }
        }

        calculadora(10, 30, true); // Llamada a la función
        echo "<br/><hr/>";

        ?>

        <!-- Variable global --------------------------------------------------------------------->
        <?php 
            $frase = "Ni los genios son tan genios, ni los mediocres tan mediocres";

            echo $frase;

            function holaMundo(){
                global $frase;
                echo "<h1>$frase</h1>";

                $year = 2019;
                echo "<h1>$year</h1>";

                return $year;
            }

            echo holaMundo();
        ?>

        <!-- Funciones variables, includes y requiere --------------------------------------------------------------------->    
        <?php
                    function buenosDias(){
                return "<h1>Hola! Buenos días :)</h1>";
            }

            function buenasTardes(){
                return "<h1>Hey!! Qué tal ha ido la comida??</h1>";
            }

            function buenasNoches(){
                return "<h1>¿Te vas a dormir ya? Buenas noches!!</h1>";
            }

            $horario = "Noches";

            $miFuncion = "buenas".$horario;
            echo $miFuncion();

            // Debuggear
            $nombre = "Victor Robles";
            var_dump($nombre);

            // Fechas
            echo date('d-m-Y');
            echo "<br/>";
            echo time();

            // Matematicas
            echo "<br/>";
            echo "Raiz cuadrada de 10: ".sqrt(10);

            echo "<br/>";
            echo "Número aleatorio entre 10 y 40: ".rand(10,40);

            echo "<br/>";
            echo "Número pi: ".pi();

            echo "<br/>";
            echo "Redondear: ".round(7.891234, 1);

            // Más funciones generales
            echo "<br/>";
            echo gettype($nombre);

            // Detectar tipado
            echo "<br/>";
            if (is_string($nombre)) {
                echo "Esa variable es un string";
            }

            echo "<br/>";
            if (!is_float($nombre)) {
                echo "La variable nombre no es un numero con decimales";
            }

            // Comprobar si existe una variable
            echo "<br/>";
            if (isset($nombre)) {
                echo "La variable existe";
            } else {
                echo "La variable no existe";
            }

            // Limpar espacios
            echo "<br/>";
            $frase = "   mi contenido   ";
            var_dump(trim($frase));

            // Eliminar variables / indices
            $year = 2020;
            unset($year);

            // Comprobar variable vacia
            $texto = " ff ";

            if (empty(trim($texto))) {
                echo "La variable texto esta vacia";
            } else {
                echo "La variable texto TIENE CONTENIDO";
            }

            echo "<br/>";

            // Contar caracteres de un string
            $cadena = "12345";
            echo strlen($cadena);

            echo "<br/>";

            // Encontrar caracter
            $frase = "La vida es bella";
            echo strpos($frase, "i32313");
            echo "<br/>";

            // Reemplazar palabras de un string
            $frase = str_replace("vida", "moto", $frase);
            echo $frase;
            echo "<br/>";

            // MAYUSCULAS Y minusculas
            echo strtolower($frase);
            echo "<br/>";
            echo strtoupper($frase);
            echo "<br/><br/><hr/>";
        ?>   

        <!-- Arrays --------------------------------------------------------------------->  
        <?php
            /*
            ARRAYS
            Un array es una coleccion o un conjunto de datos/valores, bajo un unico nombre.
            Para acceder a esos valores podemos usar un indice numero o alfanumerico.
            */

            $pelicula = "Batman";
            $peliculas = array('Batman', 'Spiderman', 'El señor de los anillos');
            $cantantes = ['2pac', 'Drake', 'Jennifer Lopez'];

            echo $peliculas[0];
            echo "<br>";
            echo $cantantes[2];
      
            // Array asociativo
            $personas = array(
                'nombre'    => 'Victor',
                'apellidos' => 'Robles',
                'web'       => 'victorroblesweb.es'
            );

            echo $personas['apellidos'];


            // Recorrer con FOR
            echo "<h1>Listado de peliculas</h1>";

            echo "<ul>";

            for ($i = 0; $i < count($peliculas); $i++) {
                echo "<li>".$peliculas[$i]."</li>";
            }

            echo "</ul>";

            // Recorrer con Foreach
            echo "<h1>Listado de cantantes</h1>";

            echo "<ul>";
            foreach ($cantantes as $cantante) {
                echo "<li>".$cantante."</li>";
            }
            echo "</ul>";

            // Arrays multidimensionales
            $contactos = array(
                array(
                    'nombre' => 'Antonio',
                    'email'  => 'antonio@antonio.com'
                ),
                array(
                    'nombre' => 'Luis',
                    'email'  => 'luis@luis.com'
                ),
                array(
                    'nombre' => 'Salvador',
                    'email'  => 'salva@salva.com'
                )
            );

            var_dump($contactos);
            echo $contactos[1]['nombre'];
            foreach ($contactos as $key => $contacto) {
                var_dump($contacto);
            }
            foreach ($contactos as $key => $contacto) {
                var_dump($contacto['nombre']);
            }
            echo "<br/>";
            
            $cantantes = ['2pac', 'Drake', 'Jennifer Lopez', 'Alfredo'];
            $numeros = [1, 2, 5, 8, 3, 4];

            // Ordenar
            sort($numeros);
            var_dump($numeros);

            // Añadir elementos array
            $cantantes[] = "Natos";
            array_push($cantantes, "Waor");

            // Eliminar elementos array
            array_pop($cantantes);
            unset($cantantes[2]);

            // Aleatorio
            $indice = array_rand($cantantes);
            echo $cantantes[$indice];

            // Dar la vuelta
            var_dump(array_reverse($numeros));

            // Buscar dentro de un array
            $resultado = array_search('Alfredo', $cantantes);
            var_dump($resultado);

            // Contar numero de elementos
            echo sizeof($cantantes);
            echo "<br/><hr/>";
        ?>

        


        
    </body>
</html>
