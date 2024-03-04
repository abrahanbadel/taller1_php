<?php
#1.	Diseñar un algoritmo que genere números aleatorios, tantos como el programador decida. Al finalizar el ciclo reportar cuántos números pares y cuántos impares se registraron, cuánto suman los pares y cuánto los impares.

// Función para generar un número aleatorio entre $min y $max
function generarNumeroAleatorio($min, $max) {
    return rand($min, $max);
}

// Definir la cantidad de números aleatorios a generar
$numerosAGenerar = 10;

// Inicializar contadores y sumas
$numerosPares = 0;
$numerosImpares = 0;
$sumaPares = 0;
$sumaImpares = 0;

// Generar números aleatorios, contar pares e impares y calcular sumas
for ($i = 0; $i < $numerosAGenerar; $i++) {
    $numero = generarNumeroAleatorio(1, 100); // Generar número aleatorio entre 1 y 100

    if ($numero % 2 == 0) { // Si es par
        $numerosPares++;
        $sumaPares += $numero;
    } else { // Si es impar
        $numerosImpares++;
        $sumaImpares += $numero;
    }
}

// Reportar resultados
echo "Cantidad de números pares generados: $numerosPares <br>";
echo "Cantidad de números impares generados: $numerosImpares <br>";
echo "Suma de los números pares: $sumaPares <br>";
echo "Suma de los números impares: $sumaImpares <br>";
?>
