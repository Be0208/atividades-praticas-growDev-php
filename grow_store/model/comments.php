<?php

require_once("./utils/next_id.php");

class Comment {
  private $id;
  private $content;
  private $createdAt;
  private $userId;
  private $productId;
  private $score;

  public function __construct($userId, $content, $createdAt, $score) {
    $this->id = createId();
    $this->content = $content;
    $this->createdAt = $createdAt;
    $this->userId = $userId;
    $this->productId = 1;
    $this->score = $score;
  }

  public function add3($commentData){
    array_push($commentData, $this);
    return $commentData;
  }

  public function update(){

  }
  
  public static function show($id, $commentData){

    $filtered = array_values(array_filter($commentData, function ($item) use ($id) {
        return $item->id == $id;
      })
      );
      

    if ($filtered) {
      echo "USER ID: " . $filtered[0]->userId . "<br>";
      echo "content: " . $filtered[0]->content . "<br>";
      echo "createdAt: " . $filtered[0]->createdAt . "<br>";
      echo "Score: " . $filtered[0]->score . "<br>";
      echo $filtered[0]->productId ? "Status: Positivo!" : "Status: Negativo!" . "<br>";
      echo "<br><hr>";
    } else {
      echo "Produto não encontrado.";
    }
  }

  public function delete($idP)
  {
  }

  public static function list($commentData)
  {
      echo "Lista de Produtos<br><hr>";
      foreach ($commentData as $value) {
        echo "USER ID: " . $value->userId . "<br>";
        echo "content: " . $value->content . "<br>";
        echo "createdAt: " . $value->createdAt . "<br>";
        echo "Score: " . $value->score . "<br>";
        echo $value->productId ? "Status: Positivo!" : "Status: Negativo!" . "<br>";
        echo "<br><hr>";
      }
  }
  
  
}