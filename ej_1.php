<?php
#1. En un almacén se hace un descuento del 10% a los clientes cuya compra sea superior a un millón y del 7% si es superior $300.000 y menor o igual a 500.000 ¿Cuánto pagará una persona por su compra?

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