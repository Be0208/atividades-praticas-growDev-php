<?php

class Pedido {
  public $itens;
  public $valorTotal;

  public function __construct($itens) {
      $this->itens = $itens;
      $this->calcularValorTotal();
  }

  private function calcularValorTotal() {
      $total = 0;
      foreach ($this->itens as $item) {
         $total += $item->valor;
      }
      $this->valorTotal = $total;
  }
}