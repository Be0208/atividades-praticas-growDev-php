<?php

class Cachorro extends Animal{
  private $corre;

    function __construct($corre ,$raca, $cor, $pelo = true) {
      $this->corre = $corre;
      parent::__construct($raca, $cor, $pelo);
    }

  public function somEmitido($som){
    echo "Som emitido: $som \n";
  }
}