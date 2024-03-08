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

$ventasMensuales = array();

$meses = [
    "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio","Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
];

foreach ($meses as $mes) {
    $ventasMensuales[$mes] = rand(15000, 30000); 
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
</body>
</html>


