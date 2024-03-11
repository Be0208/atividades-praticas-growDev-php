<?php
require_once("./model/user.php");

$newUser = new User('pedro','pedro@bol.com','1234');
var_dump($newUser);