<?php
require_once("./model/user.php");
require_once("./model/products.php");
require_once("./model/comments.php");
require_once('./data/user_data.php');
require_once('./data/product_data.php');
require_once('./data/Comment_data.php');

$newUser = new User('pedro','pedro@bol.com','1234');
$newUser2 = new User('José','jose@bol.com','5555');
$userData = $newUser->add($userData);
$userData = $newUser2->add($userData);

User::list($userData);
// User::show(1, $userData);
// User::show(2, $userData);

echo "<br></br>";

$newProduct = new Product("Sabao", "Sabao de amendoas", "R$ 15,00", true, "5 estrelas");
$newProduct2 = new Product("Pasta", "Pasta de amendoin", "R$ 10,00", true, "3 estrelas");
$productData = $newProduct->add2($productData);
$productData = $newProduct2->add2($productData);

Product::list($productData);
// Product::show(3, $productData);
// Product::show(4, $productData);

echo "<br></br>";

$newComment = new Comment($newUser->getId(), "Muito bom", "12 / 03 / 2024", "4 estrelas");
$newComment2 = new Comment($newUser2->getId(),"Pouco bom", "10 / 03 / 2024", "3 estrelas");
$commentData = $newComment->add3($commentData);
$commentData = $newComment2->add3($commentData);

Comment::list($commentData);
// Product::show(3, $productData);
// Product::show(4, $productData);