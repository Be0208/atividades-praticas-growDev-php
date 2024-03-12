b<?php

require_once("./item.php");
require_once("./pedido.php");

$item1 = new Item(10, 'Camisa', 'Camisa de algodão');
$item2 = new Item(25, 'Calça', 'Calça jeans');

$itensPedido = [$item1, $item2];

$pedido = new Pedido($itensPedido);

echo "Itens do Pedido: <br></br>";
foreach ($pedido->itens as $item) {
    echo "Nome: {$item->nome}, Descrição: {$item->descricao}, Valor: {$item->valor} <br></br>";
}

echo "Valor Total do Pedido: {$pedido->valorTotal}";
