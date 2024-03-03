<?php
#2.	La universidad ABC tiene un programa de estímulo a estudiantes con buen rendimiento académico. Si el promedio en las cuatro materias que se cursan en cada semestre es mayor o igual a 4.8, el estudiante no debe pagar matrícula para el siguiente semestre; si el promedio es superior o igual a 4.5 y menor de 4.8, el estudiante tendrá un descuento del 50%; para promedios mayores o iguales a 4.0 y menores a 4.5 se mantiene el valor; mientras que para promedios menores se incrementa en un 10% respecto al semestre anterior. Dadas las notas definitivas de las materias determinar el valor de la matrícula para el siguiente semestre.

$materia1 = 3.5;
$materia2 = 4.5;
$materia3 = 4.5;
$materia4 = 4;

$matricula = 100;
$promedio = ($materia1 + $materia2 + $materia3 + $materia4) / 4;
echo"tu promedio general en el semestre fue de: $promedio <br>";

if ($promedio >= 4.8) {
    echo"felicidades, tienes 100% de descuento en tu matricula<br>";
    $matricula = 0;

} elseif ($promedio >= 4.5 && $promedio < 4.8) {
    echo "felicidades, tienes 50% de descuento<br>";
    $matricula = $matricula - ($matricula * 0.5);

} elseif ($promedio >= 4.0 && $promedio < 4.5) {
    echo"no hay descuento en la matricula<br>";

} else {
    $matricula = $matricula + ($matricula * 0.1);
}
echo "El valor de la matrícula para el siguiente semestre es de: $$matricula ";
