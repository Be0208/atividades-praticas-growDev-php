<?php

class contador {
  public $contador;

  public function zerar(){
    $this->contador = 0;
    echo "Valor do contador agora é : $this->contador";
  }
  public function incrementar(){
    $this->contador++;
    echo "</br>";
    echo "Valor do contador agora é : $this->contador";
    echo "</br>";
    
  }
  public function valorContador(){
    echo "</br>";
    echo "Valor do contador é : $this->contador";
  }
}