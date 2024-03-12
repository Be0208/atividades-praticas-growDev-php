<?php
require_once("./formato-elemento.php");

class Circulo implements FormatoDeElemento {
  public $raio;

  public function __construct($raio) {
      $this->raio = $raio;
  }

  public function desenhar(): void {
      echo "Desenhando Círculo com raio {$this->raio}\n";
  }

  public function redimensionar(): void {
      echo "Redimensionando Círculo\n";
  }
}