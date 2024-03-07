<?php

class Cavalo extends Animal{
  private $come;

    function __construct($come ,$raca, $cor, $pelo = true) {
      $this->come = $come;
      parent::__construct($raca, $cor, $pelo);
    }

  public function somEmitido($som){
    echo "Som emitido: $som \n";
  }
}