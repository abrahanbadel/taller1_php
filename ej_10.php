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

# Datos de ejemplo (https://www.youtube.com/watch?time_continue=311&v=gUdU6BgnJ2c&embeds_referring_euri=https%3A%2F%2Fwww.google.com%2Fsearch%3Fq%3Dm%25C3%25A9todo%2Bde%2Bm%25C3%25ADnimos%2Bcuadrados%2Bejercicios%2Bresueltos%26client%3Dopera-gx%26hs%3DAyh%26sca_esv%3Db443c1&source_ve_path=MTM5MTE3LDI4NjYyLDI4NjYyLDEzOTExNywxMzkxMTcsMjg2NjY&feature=emb_logo)
$datos = array(
    array(7, 2),
    array(1, 9),
    array(10, 2),
    array(5, 5),
    array(4, 7),
    array(3, 11),
    array(13, 2),
    array(10, 5),
    array(2, 14)
);

$n = count($datos);
$sumX = 0;
$sumY = 0;
$sumXY = 0;
$sumXCuadrado = 0;

foreach ($datos as $par) {
    $sumX += $par[0];
    $sumY += $par[1];
    $sumXY += $par[0] * $par[1];
    $sumXCuadrado += $par[0] * $par[0];
}

$pendiente = ($n * $sumXY - $sumX * $sumY) / ($n * $sumXCuadrado - $sumX * $sumX);
$puntoCorte = ($sumY - $pendiente * $sumX) / $n;


echo "<table border='1'>";
echo "<tr><th>x</th><th>y</th></tr>";
foreach ($datos as $par) {
    echo "<tr><td>" . $par[0] . "</td><td>" . $par[1] . "</td></tr>";
}
echo "</table>";


$pendiente = number_format($pendiente, 2);
$puntoCorte = number_format($puntoCorte, 2);

echo "La pendiente (m) es: $pendiente<br>";
echo "El punto de corte (b) es: $puntoCorte<br>";
echo "y = ($pendiente)x + ($puntoCorte)";

echo"<br><br><br>para hacer este ejercicio me guie de este video:<br> https://www.youtube.com/watch?time_continue=311&v=gUdU6BgnJ2c&embeds_referring_euri=https%3A%2F%2Fwww.google.com%2Fsearch%3Fq%3Dm%25C3%25A9todo%2Bde%2Bm%25C3%25ADnimos%2Bcuadrados%2Bejercicios%2Bresueltos%26client%3Dopera-gx%26hs%3DAyh%26sca_esv%3Db443c1&source_ve_path=MTM5MTE3LDI4NjYyLDI4NjYyLDEzOTExNywxMzkxMTcsMjg2NjY&feature=emb_logo";
?>    
</body>
</html>
