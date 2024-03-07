<?php

require_once("./animal.php");
require_once("./cachorro.php");
require_once("./gato.php");
require_once("./cavalo.php");

$cachorro = new Cachorro("Corre muito rapido", "Pastor Alemão", "Preto e Caramelho");
print_r($cachorro);
$cachorro->somEmitido("Aauu Aauuu \n \n");

$gato = new Gato("Pula Alto", "Gato pelado", "Cinza", false);
print_r($gato);
$gato->somEmitido("Miauuuu \n \n ");

$cavalo = new Cavalo("Come pasto", "Mustangue", "Preto avermelhado");

print_r($cavalo);
$cavalo->somEmitido("Iirrrrí");