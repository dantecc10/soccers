<?php
session_start();
$búsqueda = $_GET['búsqueda'];
include "Conexión.php";
include "ConfiguraciónConstantesCíclicas.php";
for ($i = 1; $i < count($campos); $i++) {
    $camposSQL[$i] = ($campos[$i] . "_" . substr_replace($tablaSQL, "", -1));
}
$where = "WHERE (";
$cuenta = count($camposSQL);
$where .= "id_producto LIKE '%" . $búsqueda . "%' OR ";
for ($i = 1; $i < $cuenta; $i++) {
    $where .= $camposSQL[$i] . " LIKE '%" . $búsqueda . "%' OR ";
}
$where = substr_replace($where, "", -3);
$where .= ")";

$consulta = ("SELECT * FROM `" . $tablaSQL  . "` " . $where);
#echo $consulta;
$resultado = mysqli_query($conexión, $consulta) or die("Error en la consulta a la base de datos");

echo $apSupCont1; //Súpercontenedor

while ($columna = mysqli_fetch_array($resultado)) {
    echo $apCont1; //Contenedor
    for ($i = 1; $i < count($camposSQL); $i++) {
        switch ($camposSQL[$i]) {
            case $camposSQL[1]:
                echo ($apSubCont1_1 . $columna['id_producto'] . $ciSubCont1_1);
                break;
            case $camposSQL[2]:
                echo ($columna[$camposSQL[$i - 1]] . $apSubCont1_2);
                break;
            case $camposSQL[3]:
                echo ($columna[$camposSQL[$i - 1]] . $ciSubCont1_2);
                break;
            case $camposSQL[4]:
                echo ($columna[$camposSQL[$i - 1]] .  $ciSubCont1_3);
                break;
                #case $camposSQL[5]:
                #    echo ($apSubCont1_5 . $columna[$camposSQL[$i]] . $ciSubCont1_5);
                #    break;
                #case $camposSQL[6]:
                #    echo ($apSubCont1_5 . $columna[$camposSQL[$i]] . $ciSubCont1_5);
                #    break;
                #case $camposSQL[7]:
                #    echo ($apSubCont1_5 . $columna[$camposSQL[$i]] . $ciSubCont1_5);
                #    break;

            default:
                # echo "<td>" . $columna[$camposSQL[$i]] . "</td>";
                break;
        }
    }
    echo $ciCont1; //Contenedor
}

echo $ciSupCont1;
