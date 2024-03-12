<?php
require_once("./formato-elemento.php");

class Retangulo implements FormatoDeElemento {
  public $comprimento;
  public $altura;

  public function __construct($comprimento, $altura) {
      $this->comprimento = $comprimento;
      $this->altura = $altura;
  }

  public function desenhar(): void {
      echo "Desenhando Retângulo com comprimento {$this->comprimento} e altura {$this->altura}\n";
  }

  public function redimensionar(): void {
      echo "Redimensionando Retângulo\n";
  }
}