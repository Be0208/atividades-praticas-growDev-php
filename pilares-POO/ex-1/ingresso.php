<?php

abstract class Ingresso {
  protected $valor;

  public function __construct($valor) {
      $this->valor = $valor;
  }

  abstract public function imprimeValor();
}