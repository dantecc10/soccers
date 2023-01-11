<?php
include "Conexión.php";

$consulta = "SELECT * FROM `productos`";
$resultado = mysqli_query($conexión, $consulta) or die("Error en la consulta a la base de datos");

$contador = 0;

$campos = ['id', 'nombre', 'descripción', 'precio', 'existencia', 'color', 'activo'];
$tablaSQL = "productos";

echo "<table>"; //Súpercontenedor
echo "<tr>"; //Contenedor

for ($i = 1; $i < count($campos); $i++) {
    echo "<th>" . $campos[$i] . "</th>";
    $camposSQL[$i] = ($campos[$i] . "_" . substr_replace($tablaSQL, "", -1));
}

echo "</tr>"; //Contenedor

while ($columna = mysqli_fetch_array($resultado)) {
    echo "<tr>"; //Contenedor
    for ($i = 1; $i < count($campos); $i++) {
        echo "<td>" . $columna[$camposSQL[$i]] . "</td>";
    }
    echo "</tr>"; //Contenedor
}

echo "</table>";
