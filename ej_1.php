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
$precioCompra = 1000000;
$descuento = 0;
echo "El valor de la compra es: $precioCompra <br>";

if ($precioCompra >= 1000000) {
    $descuento = $precioCompra * 0.10;
} elseif ($precioCompra > 300000 && $precioCompra <= 500000) {
    $descuento = 0.07;
}

echo "El descuento de su compra es de: $descuento";

$precioFinal = $precioCompra - $descuento;
echo "<br>El precio final a pagar es: $$precioFinal";
?>
</body>
</html>

