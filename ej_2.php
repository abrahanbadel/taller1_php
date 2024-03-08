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

$materia1 = rand(0,5);
$materia2 = rand(0,5);
$materia3 = rand(0,5);
$materia4 = rand(0,5);

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
?>    
</body>
</html>
