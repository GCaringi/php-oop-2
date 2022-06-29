<?php

require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/PetFood.php";
require_once __DIR__ . "/classes/PetToy.php";
require_once __DIR__ . "/classes/User.php";
require_once __DIR__ . "/classes/RegisteredUser.php";
require_once __DIR__ . "/classes/CreditCard.php";



$spazzola = new Product("spazzola", "2356633", 13.2, 5);
$monge = new PetFood("monge", "135456", 20.1, 3, "22/5/2023", "crock");
$ball = new PetToy("ball", "135456", 24, 3, "a ball", "mediium");

var_dump($spazzola);
var_dump($monge);
var_dump($ball)



?>