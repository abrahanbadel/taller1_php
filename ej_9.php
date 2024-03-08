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

$vector = [4, 2, 2, 2, 2, 3, 4, 5, 6];

$media = array_sum($vector) / count($vector);
$varianza = array_sum(array_map(function($x) use ($media) { return pow($x - $media, 2); }, $vector)) / count($vector);

$media = number_format($media, 2);
echo "La media aritmética es $media y la varianza es $varianza ";
?>    
</body>
</html>
