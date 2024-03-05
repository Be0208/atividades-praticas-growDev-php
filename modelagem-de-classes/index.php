<?php

//------------------- 1 --------------------
require('./contador.php');echo "<br> <h1>Exercicio 1</h1> </br>";

$meuContador = new contador();

$meuContador->incrementar();
$meuContador->valorContador();

//------------------- 2 --------------------
require('./modelar-bola.php'); echo "<br> <h1>Exercicio 2</h1> </br>";
$minhaBola = new bolinha("Roxa", "Redonda", "Madeira");

$minhaBola->mostrarCor();
$minhaBola->trocarCor("Verde");
$minhaBola->mostrarCor();

//------------------- 3 --------------------
require('./contaCorrente.php'); echo "<br> <h1>Exercicio 3</h1> </br>";
$minhaConta = new contaBe("12345", "Bernardo Dartora");

echo "Seu nome é: " . $minhaConta->nomeCorrentista;
$minhaConta->alterarNome("Bibi");
echo "<br> </br>";
echo "Seu nome agora é: " . $minhaConta->nomeCorrentista;

$minhaConta->deposito(100);
$minhaConta->saque(100);
$minhaConta->deposito(50);
$minhaConta->saque(100);
$minhaConta->deposito(50);
$minhaConta->mostrarSaldo();

//------------------- 4 --------------------
require('./calculadora.php'); echo "<br> <h1>Exercicio 4</h1> </br>";
$minhaCalculadora = new calculadora();


$minhaCalculadora->dividir(20, 5);
$minhaCalculadora->dividir(20, 0);
$minhaCalculadora->multiplicar(20, 5);
$minhaCalculadora->somar(20, 5);
$minhaCalculadora->subtrair(20, 5);
$minhaCalculadora->subtrair(5, 20);

$minhaCalculadora->visualizar();

//------------------- 5 --------------------
require('./bombaCombustivel.php'); echo "<br> <h1>Exercicio 5</h1> </br>";

$bomba = new bombaCombustivel("Gasolina", 5, 1000); // Tipo, Valor por litro, Quantidade em litros na bomba
$bomba->abastecerPorValor(50);

$bomba->nameGui();

$bomba->alterarValor(10);
$bomba->abastecerPorLitro(10);

echo "Antiga quantidade na bomba: " . $bomba->quantidadeCombustivel . " L <br>";

$bomba->alterarCombustivel('Diesel');
$bomba->alterarQuantidadeCombustivel(1000);










