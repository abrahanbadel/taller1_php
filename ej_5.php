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

$numerosAGenerar = 10;

$numerosPares = 0;
$numerosImpares = 0;
$sumaPares = 0;
$sumaImpares = 0;

$numerosGenerados = array();

for ($i = 0; $i < $numerosAGenerar; $i++) {
    $numero = rand(1, 100);
    $numerosGenerados[] = $numero;

    if ($numero % 2 == 0) {
        $numerosPares++;
        $sumaPares += $numero;
    } else { 
        $numerosImpares++;
        $sumaImpares += $numero;
    }
}

echo "Los números generados son: " . implode(", ", $numerosGenerados) . "<br>";
echo "Cantidad de números pares generados: $numerosPares <br>";
echo "Cantidad de números impares generados: $numerosImpares <br>";
echo "Suma de los números pares: $sumaPares <br>";
echo "Suma de los números impares: $sumaImpares <br>";
?>    
</body>
</html>
