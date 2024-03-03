<?php
// 3.	Cree un algoritmo que tome 5 edades de forma aleatoria de 5 estudiantes y obtenga:
//     a.	El promedio
//     b.	La edad mayor
//     c.	La edad menor
    
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