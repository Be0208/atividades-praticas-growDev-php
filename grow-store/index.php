<?php
require_once("./model/user.php");
require_once('./data/user_data.php');
require_once('./model/product.php');
require_once("./model/score.php");

require_once('./data/product_data.php');
require_once('./data/comment_data.php');
require_once("./model/comment.php");
require_once('./data/score_data.php');

//usuarios
$newUser = new User('pedro','pedro@bol.com','1234');
// $newUser2 = new User('José','jose@bol.com','5555');
$userData = $newUser->add($userData); //--------------------Adicionando


echo '<h1>Produto: </h1> ';

$newProduct = new Product('Lápis', 'Escreve bem', "R$2,00");
$productData = $newProduct->add($productData); //--------------------Adicionando
Product::show($newProduct->getId() , $productData); //--------------------mostrando
$newProduct->delete($productData); //--------------------deletando


echo '<h1>Comentario: </h1> ';

$newComment = new Comment(timestamp(), 'Produto muito bom', $newUser->getId(), formatStars(1));
$commentData = $newComment->add($commentData); //--------------------Adicionando

$newComment->update("Lapis muito bom", formatStars(5)); //--------------------Atualizando

Comment::show($newComment->getId() , $commentData); //--------------------mostrando
$newComment->delete($commentData);//--------------------deletando
  

echo '<h1>Avaliaçoes: </h1> ';
// Exibir a pontuação atualizada
$score = new Score(1, $newUser->getId(), $newProduct->getId());


$score->update(4); //--------------------Atualizando
// Score::list($scoreData); //--------------------mostrando lista

// Score::show($score->getId(), [$score]);//--------------------mostrando

$scoreData = [$score];
// $score->delete($scoreData);//--------------------deletando

$score1 = new Score(5, 1, 123);
$scoreData = [$score1, $score];

Score::list($scoreData); //--------------------mostrando lista