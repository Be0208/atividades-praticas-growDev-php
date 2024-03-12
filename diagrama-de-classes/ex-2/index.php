<?php

require_once("./circulo.php");
require_once("./retangulo.php");
require_once("./formato-elemento.php");

$retangulo = new Retangulo(5, 3);
$circulo = new Circulo(4);

echo "<br></br>";

echo "Retângulo: \n";
$retangulo->desenhar();
$retangulo->redimensionar();

echo "\nCírculo:\n";
$circulo->desenhar();
$circulo->redimensionar();