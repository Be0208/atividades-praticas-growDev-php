<?php

class contaBe {

  // Atributos
  public $numeroConta;
  public $nomeCorrentista ;
  public $saldo;

  public function __construct($numeroConta, $nomeCorrentista , $saldo = 0){
    $this->numeroConta = $numeroConta;
    $this->nomeCorrentista  = $nomeCorrentista ;
    $this->saldo = $saldo;
  }

  //metodos
  public function alterarNome($novoNome){
    $this->nomeCorrentista = $novoNome;
  }
  public function deposito($grana){
    if($grana > 0) {
      $this->saldo += $grana;
      echo "<br> </br>";
      echo "Depósito de R$ $grana realizado com sucesso.";
      echo "<br> </br>";
    } else {
      echo "<br> </br>";
      echo "O valor deve ser mair que 0 !";
      echo "<br> </br>";
    }
  }
  public function saque($grana) {
    if ($grana > 0) {
        if ($this->saldo >= $grana) {
            $novoSaldo = $this->saldo - $grana;
            if ($novoSaldo >= 0) {
                $this->saldo = $novoSaldo;
                echo "Saque de R$ $grana realizado com sucesso. ";
            } else {
                echo "Saldo insuficiente para realizar o saque.";
            }
        } else {
            echo "Saldo insuficiente para realizar o saque.";
        }
    } else {
        echo "O valor do saque deve ser maior que zero.";
    }
  }
  public function mostrarSaldo() {
    $this->saldo;
    echo "<br> ";
    echo "Saldo atual: R$" . $this->saldo;
    echo "<br> ";
  }
}