<?php

abstract class Animal{
  protected $raca;
  protected $cor;
  protected $pelo;

  function __construct($raca, $cor, $pelo = true) {
    $this->raca = $raca;
    $this->cor = $cor;
    $this->pelo = $pelo;
  }

  abstract function somEmitido($som);
}