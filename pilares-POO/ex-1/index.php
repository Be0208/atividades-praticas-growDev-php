<?php
require_once("./ingresso.php");
require_once("./normal.php");
require_once("./vip.php");
require_once("./camarote.php");

$ingressoNormal = new Normal(100);
$ingressoNormal->imprimeValor();

$ingressoVIP = new VIP(100, 20);
$ingressoVIP->imprimeValor();

$ingressoCamarote = new Camarote(100, 50);
$ingressoCamarote->imprimeValor();