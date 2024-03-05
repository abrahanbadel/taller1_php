<?php
#4.	En una entrevista para contratar personal se tienen en cuenta los siguientes criterios: educación formal, edad y estado civil. Los puntajes son: para edades entre 18-24 años,10 puntos; entre 25 - 30, 20 puntos; 31 - 40 años, 15 puntos; mayores de 40, 8 puntos. Para estudios de bachillerato 5 puntos, tecnológicos 8 puntos, profesionales 10 puntos, postgrado 15 puntos. Estado civil soltero 20 puntos, casado 15 puntos, unión libre 12 puntos, separado 18 puntos. Se requiere calcular el puntaje total para un entrevistado.

function calcularPuntajeTotal($edad, $educacion, $estadoCivil) {
    
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
    return $puntajeTotal;
}

function obtenerEducacionAleatoria() {
    $educaciones = ['bachillerato', 'tecnológicos', 'profesionales', 'postgrado'];
    $indice = array_rand($educaciones);
    return $educaciones[$indice];
}

function obtenerEstadoCivilAleatorio() {
    $estadosCiviles = ['soltero', 'casado', 'unión libre', 'separado'];
    $indice = array_rand($estadosCiviles);
    return $estadosCiviles[$indice];
}

$edad = rand(18, 60);
$educacion = obtenerEducacionAleatoria();
$estadoCivil = obtenerEstadoCivilAleatorio();

$puntajeTotal = calcularPuntajeTotal($edad, $educacion, $estadoCivil);
echo "Edad: $edad años<br> Educación: $educacion<br> Estado Civil: $estadoCivil <br>";
echo "El puntaje total para el entrevistado es: $puntajeTotal puntos.";
?>
