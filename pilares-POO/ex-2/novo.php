<?php

class Novo extends Imovel{
  private $adicional;

  public function __construct($endereco, $preço, $adicional){
    $this->adicional=$adicional;
    parent::__construct($endereco, $preço);
  }
// Método de acesso
  public function getAdicional() {
    return $this->adicional ;
  }
// Método de impressão
  public function imprimeAdicional() {
    echo "\nValor adicional: R$ " . $this->adicional;
    echo "\nValor total: R$ " . $this->preco . "\n";
  }
}