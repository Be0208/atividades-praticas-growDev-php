<?php

class calculadora {
  public $historico;

  public function __construct() {
    $this->historico = [];
  }


public function somar($num1, $num2) {
  $resultado = $num1 + $num2;
  $this->historico[] = "$num1 + $num2 = $resultado";
}
public function subtrair($num1, $num2) {
  $resultado = $num1 - $num2;
  $this->historico[] = "$num1 - $num2 = $resultado";
}
public function multiplicar($num1, $num2) {
  $resultado = $num1 * $num2;
  $this->historico[] = "$num1 * $num2 = $resultado";
}
public function dividir($num1, $num2) {
  if ($num2 != 0) {
      $resultado = $num1 / $num2;
      $this->historico[] = "$num1 / $num2 = $resultado";
  } else {
      $this->historico[] = "Erro: Divisão por zero";
  }
}

public function visualizar(){
  echo "Seu historico: <br>";
  foreach ($this->historico as $operaçoes){
    echo " 🔘 $operaçoes. <br>";
  }
}
}