<?php
#1.	Diseñar un algoritmo que genere números aleatorios, tantos como el programador decida. Al finalizar el ciclo reportar cuántos números pares y cuántos impares se registraron, cuánto suman los pares y cuánto los impares.


function generarNumeroAleatorio($min, $max) {
    return rand($min, $max);
}

$numerosAGenerar = 10;
$numerosPares = 0;
$numerosImpares = 0;
$sumaPares = 0;
$sumaImpares = 0;
$numerosGenerados = array(); 

for ($i = 0; $i < $numerosAGenerar; $i++) {
    $numero = generarNumeroAleatorio(1, 100);
    $numerosGenerados[] = $numero;
    if ($numero % 2 == 0) {
        $numerosPares++;
        $sumaPares += $numero;
    } else { 
        $numerosImpares++;
        $sumaImpares += $numero;
    }
}

echo "Los números generados son: " . implode(", ", $numerosGenerados) . "<br>";
echo "Cantidad de números pares generados: $numerosPares <br>";
echo "Cantidad de números impares generados: $numerosImpares <br>";
echo "Suma de los números pares: $sumaPares <br>";
echo "Suma de los números impares: $sumaImpares <br>";
?>
