<?php

class Normal extends Ingresso {
    public function imprimeValor() {
        print_r("Valor do ingresso normal: R$ " . $this->valor . "\n") ;
    }
}