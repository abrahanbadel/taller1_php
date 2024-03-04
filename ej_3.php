<?php
#3.	Un restaurante ofrece servicio a domicilio con las siguientes condiciones. Si el pedido es superior a $ 100.000 el servicio a domicilio no tiene ningún costo adicional, si es mayor a $50.000 y hasta $100.000 se cobrará un incremento de $2.000, y si es menor a 50.000 tendrá un incremento de $4.000. ¿Qué valor deberá cancelar el cliente?

function calcularCostoEnvio($montoPedido) {
    if ($montoPedido > 100000) {
        return 0;
    } elseif ($montoPedido > 50000) {
        return 2000;
    } else {
        return 4000;
    }

$pedido = rand(10000,999999);
$costoEnvio = calcularCostoEnvio($pedido);
$totalAPagar = $pedido + $costoEnvio;
echo "El valor a cancelar por el cliente es: $" . $totalAPagar;
?>
