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
$edades = array();
for ($i = 0; $i < 5; $i++) {
    $edad = rand(17, 35);
    $edades[] = $edad;
}
echo"las edades de los estudiantes fueron: ";
echo implode(", ", $edades);

$suma = 0;
for ($i = 0; $i < count($edades); $i++) {
    $suma += $edades[$i];
}
$promedio = round($suma / count($edades));

$edadMayor = max($edades);
$edadMenor = min($edades);

echo "<br>El promedio de las edades es: $promedio<br>";
echo "La edad mayor es: $edadMayor<br>";
echo "La edad menor es: $edadMenor<br>";
?>    
</body>
</html>
