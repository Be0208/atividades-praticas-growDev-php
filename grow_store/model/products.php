<?php

class Product {
  private $id;
  protected $name;
  protected $description;
  protected $price;
  protected $avaliable;
  protected $score;

  public function __construct($name, $description, $price, $avaliable, $score, $id = 1,) {
    $this->id = $id;
    $this->name = $name;
    $this->description = $description;
    $this->price = $price;
    $this->avaliable = $avaliable;
    $this->score = $score;
  }

  public function add($productData){
    array_push($productData, $this);
    return $productData;
  }

  public function update(){

  }
  
  public static function show($id, $productData){

    $filtered = array_filter($productData, function ($item) use ($id) {
      return $item->id == $id;
    });

    if ($filtered) {
      echo "Nome: " . $filtered[0]->name . "<br>";
      echo "Description: " . $filtered[0]->description . "<br>";
      echo "Price: " . $filtered[0]->price . "<br>";
      echo "Score: " . $filtered[0]->score . "<br>";
      echo $filtered[0]->avaliable ? "Status: Positivo!" : "Status: Negativo!" . "<br>";
      echo "<br><hr>";
    } else {
      echo "Produto não encontrado.";
    }
  }

  public function delete($idP)
  {
  }

  public static function list($productData)
  {
      echo "Lista de usuários<br><hr>";
      foreach ($productData as $value) {
          echo "Nome: " . $value->name . "<br>";
          echo "E-mail: " . $value->email . "<br>";
          echo $value->active ? "Status: Ativo!" : "Status: Inativo!" . "<br>";
          echo "<br><hr>";
      }
  }
  
  
}