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
// Crear una calculadora que tenga las 4 operaciones básicas






