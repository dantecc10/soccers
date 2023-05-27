<?php
session_start();
$_SESSION['carrito'];
$_SESSION['carrito']['id'];
$_SESSION['carrito']['cantidad'];

$id = $_GET['id'];
$cantidad = $_GET['cantidad'];

//array_push($_SESSION['carrito']['id'], $id);
//array_push($_SESSION['carrito']['cantidad'], $cantidad);

$_SESSION['carrito']['id'][(sizeof($_SESSION['carrito']['id']))] = $id;
$_SESSION['carrito']['cantidad'][(sizeof($_SESSION['carrito']['cantidad']))] = $cantidad;


//array_values($_SESSION['carrito']['id']);
//array_values($_SESSION['carrito']['cantidad']);

echo ("Los artículos del carrito son: ");
for ($i = 1; $i < (sizeof($_SESSION['carrito']['id']) + 1); $i++) {
    echo ("<p>" . $_SESSION['carrito']['id'][$i] . ": " . $_SESSION['carrito']['cantidad'][$i] . "</p>");
}

echo ("Hay " . sizeof($_SESSION['carrito']['id']) . " datos en los arreglos.");