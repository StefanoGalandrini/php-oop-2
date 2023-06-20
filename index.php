<?php

include_once __DIR__ . "/models/category.php";
include_once __DIR__ . "/models/product.php";
include_once __DIR__ . "/models/food.php";
include_once __DIR__ . "/models/bed.php";
include_once __DIR__ . "/models/toy.php";

$dogCategory = new Category("Cane");
$catCategory = new Category("Gatto");

$dogFood = new Food($dogCategory, "Bocconcini", 10.99, "Manzo e Vitello");
$catToy = new Toy($catCategory, "Gioco interattivo con farfalle", 17.50, "Plastica");
$catBed = new Bed($catCategory, "Cuccia per gatti", 35.75, "Media");
var_dump($dogFood);
echo $dogFood->getProductTitle() . "<br>";
echo $dogFood->getProductImage() . "<br>";
echo $dogFood->getIconPath();

var_dump($catToy);
echo $catToy->getProductTitle() . "<br>";
echo $catToy->getProductImage() . "<br>";
echo $catToy->getIconPath();

var_dump($catBed);
echo $catBed->getProductTitle() . "<br>";
echo $catBed->getProductImage() . "<br>";
echo $catBed->getIconPath();
