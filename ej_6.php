<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abraham Badel y Mateo Villalobos</title>
</head>
<body>
<?php

#abrahan jussep badel palmett
#mateo david villalobos bertel

function generarTiempoPrueba() {
    return rand(10, 25); // Tiempo en minutos
}

$tiemposPruebas = array();

$cumpleMaximo = true;
$cumpleMinimo = false;

for ($i = 0; $i < 10; $i++) {
    $tiempo = generarTiempoPrueba();
    $tiemposPruebas[] = $tiempo;

    echo "Día " . ($i + 1) . ": $tiempo minutos <br>"; 

    if ($tiempo > 20) {
        $cumpleMaximo = false;
    }

    if ($tiempo < 15) {
        $cumpleMinimo = true;
    }
}

$promedio = array_sum($tiemposPruebas) / count($tiemposPruebas);

if ($cumpleMaximo && $cumpleMinimo && $promedio <= 18) {
    echo "El atleta es apto para la competencia.";
} else {
    echo "El atleta no es apto para la competencia.";
}
?>    
</body>
</html>

