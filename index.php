<?php

include_once __DIR__ . "/models/Category.php";
include_once __DIR__ . "/models/Product.php";
include_once __DIR__ . "/models/Food.php";
include_once __DIR__ . "/models/Bed.php";
include_once __DIR__ . "/models/Toy.php";
include_once __DIR__ . "/models/db.php";


// initialize arrays for categories and products
$foods = [];
$beds = [];
$toys = [];




$dogCategory = new Category("Cane");
$catCategory = new Category("Gatto");

// crea classi "children" che ereditano da Category -> Product
$dogFood = new Food($dogCategory, "Croccantini", 13.99, "Manzo e Riso");
$dogToy = new Toy($dogCategory, "Palla multifunzionale con ventosa e corda elastica", 16.99, "Gomma e ABS");
$dogFood = new Bed($dogCategory, "Lettino rialzato rinfrescante", 25.20, "Large");
$catFood = new Food($catCategory, "Cibo umido per gatti adulti", 2.75, "Filetti di pollo con mela");
$catToy = new Toy($catCategory, "Palline interattive con luci a LED", 18.99, "ABS con ricarica USB");
$catBed = new Bed($catCategory, "Casetta adattabile a lettino", 29.55, "Media");

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>e-Commerce per animali</title>
	<link rel="stylesheet" href="assets/style.css">
</head>

<body>

</body>

</html>

<?php
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
?>
