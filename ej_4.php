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

$edad = rand(18, 60);

$educaciones = ['bachillerato', 'tecnológicos', 'profesionales', 'postgrado'];
$indiceEducacion = array_rand($educaciones);
$educacion = $educaciones[$indiceEducacion];

$estadosCiviles = ['soltero', 'casado', 'unión libre', 'separado'];
$indiceEstadoCivil = array_rand($estadosCiviles);
$estadoCivil = $estadosCiviles[$indiceEstadoCivil];

if ($edad >= 18 && $edad <= 24) {
    $puntajeEdad = 10;
} elseif ($edad >= 25 && $edad <= 30) {
    $puntajeEdad = 20;
} elseif ($edad >= 31 && $edad <= 40) {
    $puntajeEdad = 15;
} else {
    $puntajeEdad = 8;
}

switch ($educacion) {
    case 'bachillerato':
        $puntajeEducacion = 5;
        break;
    case 'tecnológicos':
        $puntajeEducacion = 8;
        break;
    case 'profesionales':
        $puntajeEducacion = 10;
        break;
    case 'postgrado':
        $puntajeEducacion = 15;
        break;
    default:
        $puntajeEducacion = 0;
}

switch ($estadoCivil) {
    case 'soltero':
        $puntajeEstadoCivil = 20;
        break;
    case 'casado':
        $puntajeEstadoCivil = 15;
        break;
    case 'unión libre':
        $puntajeEstadoCivil = 12;
        break;
    case 'separado':
        $puntajeEstadoCivil = 18;
        break;
    default:
        $puntajeEstadoCivil = 0;
}

$puntajeTotal = $puntajeEdad + $puntajeEducacion + $puntajeEstadoCivil;

echo "Edad: $edad años<br> Educación: $educacion<br> Estado Civil: $estadoCivil <br>";
echo "El puntaje total para el entrevistado es: $puntajeTotal puntos.";
?>    
</body>
</html>
