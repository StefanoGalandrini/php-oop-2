<?php

include __DIR__ . "/models/product.php";
include __DIR__ . "/models/dog-product.php";
include __DIR__ . "/models/cat-product.php";

$dogProduct = new DogProduct("Osso di gomma", 10.99, "Giocattolo");
$catProduct = new CatProduct("Bocconcini al tonno", 15.99, "Cibo");

var_dump($dogProduct);
var_dump($catProduct);
