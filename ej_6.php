<?php
// 	Un entrenador le ha propuesto a un atleta recorrer una ruta de cinco kilómetros durante 10 días, para determinar si es apto para la prueba de 5 kilómetros. Para considerarlo apto debe cumplir las siguientes condiciones:
// •	Que en ninguna de las pruebas haga un tiempo mayor a 20 minutos.
// •	Que al menos en una de las pruebas realice un tiempo menor de 15 minutos.
// •	Que su promedio sea menor o igual a 18 minutos.
// Diseñar un algoritmo para registrar los datos y decidir si es apto para la competencia.

function generarTiempoPrueba() {
    return rand(10, 25); // 
}

function determinarAptitudAtleta($tiemposPruebas) {
    $cumpleMaximo = true;
    $cumpleMinimo = false;
    $promedio = array_sum($tiemposPruebas) / count($tiemposPruebas);

    foreach ($tiemposPruebas as $indice => $tiempo) {
        echo "Día " . ($indice + 1) . ": $tiempo minutos <br>"; 

        if ($tiempo > 20) {
            $cumpleMaximo = false;
        }

        if ($tiempo < 15) {
            $cumpleMinimo = true;
        }
    }

    return ($cumpleMaximo && $cumpleMinimo && $promedio <= 18);
}

$tiemposPruebas = array();
for ($i = 0; $i < 10; $i++) {
    $tiemposPruebas[] = generarTiempoPrueba();
}

if (determinarAptitudAtleta($tiemposPruebas)) {
    echo "El atleta es apto para la competencia.";
} else {
    echo "El atleta no es apto para la competencia.";
}
?>

