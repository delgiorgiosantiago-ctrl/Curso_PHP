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

