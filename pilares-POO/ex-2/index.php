<?php
require_once("./imovel.php");
require_once("./novo.php");
require_once("./velho.php");

$novoImovel = new Novo("Primavera, 348", 500, 200);
echo " Novo: \n";
$novoImovel->imprimeAdicional();
echo "get: ";
print_r($novoImovel->getAdicional());
// print_r($novoImovel);


$velhoImovel = new Velho("Primavera, 348", 500, 200);
echo " \n\n Velho: \n";
$velhoImovel->imprimeDesconto();
echo "get: ";
print_r($velhoImovel->getDesconto());
// print_r($velhoImovel);




