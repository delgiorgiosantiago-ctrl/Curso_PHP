<!-- Ejercicios Bloque 1 -->    
<?php
// Ejercicio 1 
// Crear dos variables, una para el país y otra para el continente, y mostrar su valor por pantalla (imprimir por pantalla "El país es X y está en el continente Y") 
$pais = "España"; // string
$continente = "Europa"; // string

echo "El país es $pais y está en el continente $continente";
echo "<hr><br>";


// Ejercicio 2
// Mostrar todos los números pares del 1 al 100
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo "Número par: $i <br>";
    }
}
echo "<hr><br>";

// Ejercicio 3
// Mostrar el numero multiplicado por si minsmo de los números del 1 al 40 (1*1, 2*2, 3*3, etc)
$contador = 0;
while ($contador <= 40) {
    $cuadrado = $contador * $contador;
    echo "El cuadrado de $contador es: $cuadrado <br>";
    $contador++;
}
echo "<hr><br>";

// Ejercicio 4
// recoger 2 números por la url (parametros get) y hacer todas las operaciones básicas de una calculadora (suma, resta, multiplicación, división)
if (isset($_GET['num1']) && isset($_GET['num2'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];

    echo "Números recibidos: $num1 y $num2 <br>";
    echo "Suma: " . ($num1 + $num2) . "<br>";
    echo "Resta: " . ($num1 - $num2) . "<br>";
    echo "Multiplicación: " . ($num1 * $num2) . "<br>";
    if ($num2 != 0) {
        echo "División: " . ($num1 / $num2) . "<br>";
    } else {
        echo "División: No se puede dividir por cero.<br>";
    }
} else {
    echo "Por favor, proporciona los números num1 y num2 en la URL.<br>";
}
echo "<hr><br>";

// Ejercicio 5
// Hacer un programa que muestre todos los números entre dos números que nos lleguen por la url (parametros get)
if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    if ($numero1 < $numero2) {
        for ($i = $numero1; $i <= $numero2; $i++) {
            echo "$i <br>";
        }
    } elseif ($numero1 > $numero2) {
        for ($i = $numero2; $i <= $numero1; $i++) {
            echo "$i <br>";
        }
    } else {
        echo "Los números son iguales: $numero1<br>";
    }
} else {
    echo "Por favor, proporciona los números numero1 y numero2 en la URL.<br>";
}
echo "<hr><br>";

// Ejercicio 6
// Mostrar en una tabla de html con las tablas de multiplicar del 1 al 10
echo "<table border='1'>";
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 10; $j++) {
        echo "<td>" . ($i * $j) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
echo "<hr><br>";

// Ejercicio 7
// Hacer un programa que muestre todos los números entre dos números impares que nos lleguen por la url (parametros get)
if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    if ($numero1 < $numero2) {
        for ($i = $numero1; $i <= $numero2; $i++) {
            echo "$i <br>";
            if ($i % 2 != 0) {
                echo "Número impar: $i <br>";
            }
        }
    } elseif ($numero1 > $numero2) {
        for ($i = $numero2; $i <= $numero1; $i++) {
            echo "$i <br>";
            if ($i % 2 != 0) {
                echo "Número impar: $i <br>";
            }
        }
    } else {
        echo "Los números son iguales: $numero1<br>";
    }
} else {
    echo "Por favor, proporciona los números numero1 y numero2 en la URL.<br>";
}
echo "<hr><br>";
?>

<!-- Ejercicios Bloque 2 --> 
<?php
// Ejercicio 1
/*
Hacer un programa en PHP que tenga un array con 8 numeros enteros
y que haga lo siguiente:
- Recorrerlo y mostrarlo
- Ordenarlo y mostrarlo
- Mostrar su longitud
- Buscar algun elemento
*/
// FUNCIONES
function mostrarArray($numeros) {
    $resultado = "";

    foreach ($numeros as $numero) {
        // $resultado = $resultado.$numero."<br/>";
        $resultado .= $numero."<br/>";
    }

    return $resultado;
}

    // Crear el array
    $numeros = array(11, 44, 55, 77, 23, 9, 97, 67);

    // Recorrer y mostrar
    echo "<h1>Recorrer y mostrar</h1>";
    echo mostrarArray($numeros);

    // Ordenarlo y mostrarlo
    echo "<h1>Ordenar y mostrar</h1>";

    sort($numeros);
    echo mostrarArray($numeros);

    // Mostrar longitud
    echo "<h1>Longitud del array</h1>";
    echo "La longitud del array es: " . count($numeros);


    // Busqueda en el array
    if (isset($_GET['numero'])) {

    $busqueda = $_GET['numero'];

    echo "<h1>Buscar en el array el número $busqueda</h1>";

    $search = array_search($busqueda, $numeros);

    if (!empty($search)) {
        echo "<h4>El numero buscado existe en el array, en el indice: $search</h4>";
    } else {
        echo "No existe el numero buscado";
    }
}

// Ejercicio 2
    /*
    Escribir un programa con PHP que añada valores a un array mientras que su
    longitud sea menor a 120 y luego mostrarlo por pantalla.
    */

    $coleccion = array();

    for ($i = 0; $i < 120; $i++) {
        array_push($coleccion, "elemento-" . $i);
    }

    var_dump($coleccion);

// Ejercicio 3
    /*
    Programa que compruebe si una variable esta vacia y si está vacia,
    rellenarla con texto en minusculas y mostrarlo en mayusculas y negrita.
    */

    $texto = "";

    if (empty($texto)) {
        $texto = "hola yo soy el relleno de la variable texto";
        $textoMAYUS = strtoupper($texto);

        echo "<strong>$textoMAYUS</strong>";
    } else {
        echo "La variable tiene este contenido dentro: " . $texto;
    }

// Ejercicio 4
    /*
    Crear un script en php que tenga 4 variables, una de tipo array,
    otra de tipo string, otra int y otra booleana y que imprima un mensaje
    segun el tipo de variable que sea.
    */

    $matriz = array("hola mundo", 88);
    $titulo = "Master en PHP";
    $numero = 77;
    $verdadero = true;

    if (is_array($matriz)) {
        echo "<h1>El array es un array</h1>";
    }

    if (is_string($titulo)) {
        echo "<h1>$titulo</h1>";
    }

    if (is_integer($numero)) {
        echo "<h1>$numero</h1>";
    }

    if (is_bool($verdadero)) {
        echo "El booleano es verdadero";
    }

// Ejercicio 5
    /*
    Crear un array con el contenido de la tabla:

    ACCION      AVENTURA        DEPORTES
    GTA         ASSASINS        FIFA 19
    COD         CRASH           PES 19
    PUBG        Prince of persia MOTO GP 19

    Cada columna debe ir en un fichero separado (includes).
    */

    $tabla = array(
        "ACCION" => array("GTA 5", "Call of Duty", "PUBG"),
        "AVENTURA" => array("Assasins Creed", "Crash Bandicoot", "Prince of Persia"),
        "DEPORTES" => array("Fifa 19", "PES 19", "Moto G 19")
    );

    $categorias = array_keys($tabla);
    ?>

    <table border="1">
        <tr>
            <?php foreach ($categorias as $categoria): ?>
                <th><?= $categoria ?></th>
            <?php endforeach; ?>
        </tr>

        <tr>
            <td><?= $tabla['ACCION'][0] ?></td>
            <td><?= $tabla['AVENTURA'][0] ?></td>
            <td><?= $tabla['DEPORTES'][0] ?></td>
        </tr>

        <tr>
            <td><?= $tabla['ACCION'][1] ?></td>
            <td><?= $tabla['AVENTURA'][1] ?></td>
            <td><?= $tabla['DEPORTES'][1] ?></td>
        </tr>

        <tr>
            <td><?= $tabla['ACCION'][2] ?></td>
            <td><?= $tabla['AVENTURA'][2] ?></td>
            <td><?= $tabla['DEPORTES'][2] ?></td>
        </tr>
    </table>

