<?php
session_start();

$id = $_GET['id'];
$cantidad = $_GET['cantidad'];

$_SESSION['carrito'];
$_SESSION['carrito']['id'] = [""];
$_SESSION['carrito']['cantidad'] = [""];


$_SESSION['carrito']['id'][(sizeof($_SESSION['carrito']['id']))] = $id;
$_SESSION['carrito']['cantidad'][(sizeof($_SESSION['carrito']['cantidad']))] = $cantidad;



echo ("Los artículos del carrito son: ");
for ($i = 0; $i < sizeof($_SESSION['carrito']['id']); $i++) {
    echo ("<p>" . $_SESSION['carrito']['id'][$i] . ": " . $_SESSION['carrito']['cantidad'][$i] . "</p>");
}
