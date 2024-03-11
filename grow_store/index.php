<?php
require_once("./model/user.php");
require_once('./data/user_data.php');

$newUser = new User('pedro','pedro@bol.com','1234');
$userData = $newUser->add($userData);


var_dump($userData);