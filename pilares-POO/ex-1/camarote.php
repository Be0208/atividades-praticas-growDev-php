<?php

class Camarote extends Ingresso{
    private $adicional;

    public function __construct($valor, $adicional) {
        parent::__construct($valor);
        $this->adicional = $adicional;
    }

    public function imprimeValor() {
        $valorTotal = $this->valor + $this->adicional;
        echo "Valor do ingresso Camarote: R$ " . $valorTotal . "\n";
    }
}