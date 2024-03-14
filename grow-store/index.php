<?php
require_once("./model/comment.php");
require_once('./model/product.php');
require_once("./model/user.php");
require_once("./model/score.php");

require_once('./data/product_data.php');
require_once('./data/comment_data.php');
require_once('./data/user_data.php');
require_once('./data/score_data.php');

//usuarios
$newUser = new User('pedro','pedro@bol.com','1234');
// $newUser2 = new User('José','jose@bol.com','5555');
$userData = $newUser->add($userData); //--------------------Adicionando


echo '<h1>Produto: </h1> ';

$newProduct = new Product('Lápis', 'Escreve bem', "R$2,00");
$newProduct2 = new Product('Caneta', 'Escreve muitooo', "R$6,00");

$productData = $newProduct->add($productData); //--------------------Adicionando
$productData = $newProduct2->add($productData); //--------------------Adicionando

Product::show($newProduct->getId() , $productData); //--------------------mostrando

$newProduct->delete($productData); //--------------------deletando

Product::show($newProduct2->getId() , $productData); //--------------------mostrando


echo '<h1>Comentario: </h1> ';

$newComment = new Comment(timestamp(), 'Produto muito ruim', $newUser->getId(), formatStars(1));
$newComment2 = new Comment(timestamp(), 'Nossa que ruim', $newUser->getId(), formatStars(2));


$commentData = $newComment->add($commentData); //--------------------Adicionando 1
$commentData = $newComment2->add($commentData); //--------------------Adicionando 2

$newComment->update("Lapis muito bom", formatStars(5)); //--------------------Atualizando 1 
$newComment2->update("agora ficou bom", formatStars(5)); //--------------------Atualizando 2

// Comment::show($newComment->getId() , $commentData); //--------------------mostrando 1
// Comment::show($newComment2->getId() , $commentData); //--------------------mostrando 2 

Comment::list($commentData); //--------------------mostrando Tudo

$newComment->delete($commentData);//--------------------deletando 1
Comment::list($commentData); //--------------------mostrando Lista
  

echo '<h1>Avaliaçoes: </h1> ';
// Exibir a pontuação atualizada
$score = new Score(1, $newUser->getId(), $newProduct->getId());
$score2 = new Score(2, $newUser->getId(), $newProduct->getId());


$score->update(4); //--------------------Atualizando
$score2->update(9); //--------------------Atualizando

// Score::show($score->getId(), [$score]);//--------------------mostrando

$scoreData = [$score, $score2]; 
$score->delete($scoreData);//--------------------deletando

Score::list($scoreData); //--------------------mostrando lista