<?php

include_once __DIR__ . "/models/category.php";
include_once __DIR__ . "/models/product.php";

$dogProduct = new Category("Cane");


$dogSomething = new Product($dogProduct, "Giocattolo");

var_dump($dogSomething);
echo $dogSomething->getImagePath();
