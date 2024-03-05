<?php
#1.	El almacén Buena Ropa cuenta con los registros mensuales de ventas de enero a diciembre del año 2023 y desea un algoritmo para determinar: en qué mes se tuvo la venta más alta, en cuál la más baja y el promedio de todas las ventas.

function generarVentasAleatorias() {
    return rand(15000, 30000); 
}

$ventasMensuales = array();
$meses = [
    "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
    "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
];

foreach ($meses as $mes) {
    $ventasMensuales[$mes] = generarVentasAleatorias();
}

$maximaVenta = max($ventasMensuales);
$mesMaximaVenta = array_search($maximaVenta, $ventasMensuales);

$minimaVenta = min($ventasMensuales);
$mesMinimaVenta = array_search($minimaVenta, $ventasMensuales);

$promedioVentas = array_sum($ventasMensuales) / count($ventasMensuales);

$maximaVentaFormateada = number_format($maximaVenta);
$minimaVentaFormateada = number_format($minimaVenta);
$promedioVentasFormateado = number_format($promedioVentas);

echo "Las ventas mensuales son: <br>";
foreach ($ventasMensuales as $mes => $ventas) {
    $ventasFormateadas = number_format($ventas);
    echo "$mes: $ventasFormateadas <br>";
}
echo "La venta más alta ocurrió en $mesMaximaVenta con un total de $maximaVentaFormateada. <br>";
echo "La venta más baja ocurrió en $mesMinimaVenta con un total de $minimaVentaFormateada. <br>";
echo "El promedio de ventas mensuales fue de $promedioVentasFormateado. <br>";
?>


