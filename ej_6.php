<?php
// 	Un entrenador le ha propuesto a un atleta recorrer una ruta de cinco kilómetros durante 10 días, para determinar si es apto para la prueba de 5 kilómetros. Para considerarlo apto debe cumplir las siguientes condiciones:
// •	Que en ninguna de las pruebas haga un tiempo mayor a 20 minutos.
// •	Que al menos en una de las pruebas realice un tiempo menor de 15 minutos.
// •	Que su promedio sea menor o igual a 18 minutos.
// Diseñar un algoritmo para registrar los datos y decidir si es apto para la competencia.

// Definir los tiempos de las pruebas de cada día
$tiempos = array(
    1 => 18, // Tiempo del día 1 en minutos
    2 => 17, // Tiempo del día 2 en minutos
    3 => 19, // Tiempo del día 3 en minutos
    4 => 16, // Tiempo del día 4 en minutos
    5 => 20, // Tiempo del día 5 en minutos
    6 => 14, // Tiempo del día 6 en minutos
    7 => 18, // Tiempo del día 7 en minutos
    8 => 19, // Tiempo del día 8 en minutos
    9 => 17, // Tiempo del día 9 en minutos
    10 => 16 // Tiempo del día 10 en minutos
);

// Inicializar variables para contar condiciones cumplidas
$cumpleCondicion1 = false; // Si en ninguna prueba hace un tiempo mayor a 20 minutos
$cumpleCondicion2 = false; // Si al menos en una prueba hace un tiempo menor de 15 minutos
$sumaTiempos = 0; // Variable para calcular el promedio de tiempos

// Iterar sobre los tiempos de las pruebas
foreach ($tiempos as $dia => $tiempo) {
    // Verificar la condición 1
    if ($tiempo <= 20) {
        $cumpleCondicion1 = true;
    }

    // Verificar la condición 2
    if ($tiempo < 15) {
        $cumpleCondicion2 = true;
    }

    // Calcular la suma de tiempos para el promedio
    $sumaTiempos += $tiempo;
}

// Calcular el promedio de tiempos
$promedioTiempos = $sumaTiempos / count($tiempos);

// Verificar la condición 3
if ($promedioTiempos <= 18) {
    $cumpleCondicion3 = true;
} else {
    $cumpleCondicion3 = false;
}

// Decidir si es apto para la competencia
if ($cumpleCondicion1 && $cumpleCondicion2 && $cumpleCondicion3) {
    echo "El atleta es apto para la competencia.";
} else {
    echo "El atleta no es apto para la competencia.";
}
?>

