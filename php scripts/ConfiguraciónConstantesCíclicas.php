<?php
$campos = ['id', 'nombre', 'descripción', 'precio', 'existencia', 'color', 'activo'];
$tablaSQL = "productos";

$apSupCont1 = ("
<div class='container'><!-- Start: Animated Pretty Product List -->
<div class='row product-list dev'>");
$ciSupCont1 = ("
</div>
</div>");

$apCont1 = ("
<div class='col-sm-6 col-md-4 product-item animation-element slide-top-left'>
<div class='product-container'>
<div class='row'>");
$ciCont1 = ("</div></div></div>");

$apSubCont1_1 = ("<div class='col-md-12'><a class='product-image' href='#'><img src='assets/img/productos/");
$ciSubCont1_1 = (".png'></a></div><div class='row'><div class='col-8 col-lg-12'><h2><a href='#'>");

$apSubCont1_2 = ("</a></h2></div></div><div class='row'><div class='col-12'><p class='product-description'>");
$ciSubCont1_2 = ("</p><div class='row'><div class='col-6'><button class='btn btn-light' type='button'>Comprar ahora</button></div><div class='col-6'><p class='product-price'>$");

$ciSubCont1_3 = ("</p></div></div></div></div>");
