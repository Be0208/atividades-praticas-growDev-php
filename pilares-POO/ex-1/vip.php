<?php

class VIP extends Ingresso {
  private $adicional;

  public function __construct($valor, $adicional) {
      parent::__construct($valor);
      $this->adicional = $adicional;
  }

  public function imprimeValor() {
      $valorTotal = $this->valor + $this->adicional;
      print_r("Valor do ingresso VIP: R$ " . $valorTotal . "\n") ;
  }
}