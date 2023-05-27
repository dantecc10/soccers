<?php
session_start();

$id = $_GET['id'];
$cantidad = $_GET['cantidad'];

$_SESSION['carrito'];
$_SESSION['carrito']['id'] = [""];
$_SESSION['carrito']['cantidad'] = [""];


$_SESSION['carrito']['id'][(sizeof($_SESSION['carrito']['id'])) + 1] = $id;
$_SESSION['carrito']['cantidad'][(sizeof($_SESSION['carrito']['cantidad'])) + 1] = $cantidad;



echo ("Los artículos del carrito son: ");
for ($i = 0; $i < sizeof($_SESSION['carrito']['id']); $i++) {
    echo ("<p>" . $_SESSION['carrito']['id'][$i] . ": " . $_SESSION['carrito']['cantidad'][$i] . "</p>");
}
