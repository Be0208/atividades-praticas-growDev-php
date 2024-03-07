<?php

class Imovel{
 public $endereco;
 public $preco;

 public function __construct($endereco, $preço){
  $this->endereco = $endereco;
  $this->preco = $preço;
 }
}