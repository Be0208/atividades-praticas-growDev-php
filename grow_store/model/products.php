<?php

require_once("./utils/next_id.php");

class Product {
  private $id;
  private $name;
  private $description;
  private $price;
  private $avaliable;
  private $score;

  public function __construct($name, $description, $price, $avaliable, $score) {
    $this->id = createId();
    $this->name = $name;
    $this->description = $description;
    $this->price = $price;
    $this->avaliable = $avaliable;
    $this->score = $score;
  }

  public function add2($productData){
    array_push($productData, $this);
    return $productData;
  }

  public function update(){

  }
  
  public static function show2($id, $productData){

    $filtered = array_values(array_filter($productData, function ($item) use ($id) {
        return $item->id == $id;
      })
      );
      

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
      echo "Lista de Produtos<br><hr>";
      foreach ($productData as $value) {
        echo "Nome: " . $value->name . "<br>";
        echo "Description: " . $value->description . "<br>";
        echo "Price: " . $value->price . "<br>";
        echo "Score: " . $value->score . "<br>";
        echo $value->avaliable ? "Status: Positivo!" : "Status: Negativo!" . "<br>";
        echo "<br><hr>";
      }
  }
  
  
}