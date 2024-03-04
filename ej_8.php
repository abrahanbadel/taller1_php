<?php
#1.	El almacén Buena Ropa cuenta con los registros mensuales de ventas de enero a diciembre del año 2023 y desea un algoritmo para determinar: en qué mes se tuvo la venta más alta, en cuál la más baja y el promedio de todas las ventas.
// Registros mensuales de ventas
$ventasMensuales = array(
    "Enero" => 15000,
    "Febrero" => 18000,
    "Marzo" => 22000,
    "Abril" => 17000,
    "Mayo" => 25000,
    "Junio" => 20000,
    "Julio" => 23000,
    "Agosto" => 21000,
    "Septiembre" => 19000,
    "Octubre" => 26000,
    "Noviembre" => 24000,
    "Diciembre" => 28000
);

// Encontrar la venta más alta
$maximaVenta = max($ventasMensuales);
$mesMaximaVenta = array_search($maximaVenta, $ventasMensuales);

// Encontrar la venta más baja
$minimaVenta = min($ventasMensuales);
$mesMinimaVenta = array_search($minimaVenta, $ventasMensuales);

// Calcular el promedio de todas las ventas
$promedioVentas = array_sum($ventasMensuales) / count($ventasMensuales);

// Mostrar resultados
echo "La venta más alta ocurrió en $mesMaximaVenta con un total de $maximaVenta. <br>";
echo "La venta más baja ocurrió en $mesMinimaVenta con un total de $minimaVenta. <br>";
echo "El promedio de ventas mensuales fue de $promedioVentas. <br>";
?>
