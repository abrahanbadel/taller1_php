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

$pedido = rand(10000, 200000);

if ($pedido > 100000) {
    $costoEnvio = 0;
} elseif ($pedido > 50000) {
    $costoEnvio = 2000;
} else {
    $costoEnvio = 4000;
}

$totalAPagar = $pedido + $costoEnvio;

echo "El valor del pedido es de: $" . number_format($pedido);
echo "<br>El valor a cancelar por el cliente es: $" . number_format($totalAPagar);
?>
</body>
</html>
