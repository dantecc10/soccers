<?php
$campos = ['id', 'nombre', 'descripción', 'precio', 'existencia', 'color', 'activo'];
$tablaSQL = "productos";
for ($i = 1; $i < count($campos); $i++) {
    $camposSQL[$i] = ($campos[$i] . "_" . substr_replace($tablaSQL, "", -1));
}
$apSupCont1 = ("<div class='container'><!-- Start: Animated Pretty Product List --><div class='row product-list dev'>");
$ciSupCont1 = ("</div></div>");

$apCont1 = ("<div class='col-sm-6 col-md-4 product-item animation-element slide-top-left'><div class='product-container'><div class='row'>");
$ciCont1 = ("</div></div></div>");

$apSubCont1_1 = ("<div class='col-md-12'><a class='product-image' href='#'><img src='assets/img/productos/");
$ciSubCont1_1 = (".png'></a></div>
    </div>
    <div class='row'>
        <div class='col-8 col-lg-12'>");
