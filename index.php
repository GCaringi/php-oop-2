<?php

require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/PetFood.php";

$spazzola = new Product("spazzola", "2356633", 13.2, 5);
$monge = new PetFood("monge", "135456", 20.1, 3, "22/5/2023", "crock");

var_dump($spazzola);
var_dump($monge);

var_dump($monge->get_price());


?>