<?php

class Gato extends Animal{
  private $pular;

    function __construct($pular ,$raca, $cor, $pelo = true) {
      $this->pular = $pular;
      parent::__construct($raca, $cor, $pelo);
    }

  public function somEmitido($som){
    echo "Som emitido: $som \n";
  }
}