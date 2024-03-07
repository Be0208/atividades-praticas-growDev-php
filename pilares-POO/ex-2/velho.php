<?php

class Velho extends Imovel{
  private $desconto;

  public function __construct($endereco, $preco, $desconto) {
    $this->desconto = $desconto;
    parent::__construct($endereco, $preco);
  }
  // Método de acesso
  public function getDesconto() {
    return $this->desconto ;
  }
// Método de impressão
  public function imprimeDesconto() {
    echo "\nValor Descontado: R$ " . $this->desconto;
    echo "\nValor total: R$ " . $this->preco . "\n";
  }
}