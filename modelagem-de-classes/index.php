<?php

//------------------- 1 --------------------
require('./contador.php');

$meuContador = new contador();

$meuContador->incrementar();
$meuContador->valorContador();

//------------------- 2 --------------------
require('./modelar-bola.php');
$minhaBola = new bolinha("Roxa", "Redonda", "Madeira");

$minhaBola->mostrarCor();
$minhaBola->trocarCor("Verde");
$minhaBola->mostrarCor();

//------------------- 3 --------------------








