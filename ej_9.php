<?php
#2.	Escriba un programa en php que permita comprobar que la media aritmética y la varianza del siguiente vector: [4,2,2,2,2,3,4,5,6] es  3.33 y 2.0 respectivamente. (ver imagen del word)

$vector = [4, 2, 2, 2, 2, 3, 4, 5, 6];

$media = array_sum($vector) / count($vector);
$varianza = array_sum(array_map(function($x) use ($media) { return pow($x - $media, 2); }, $vector)) / count($vector);

$media = number_format($media, 2);
echo "La media aritmética es $media y la varianza es $varianza ";