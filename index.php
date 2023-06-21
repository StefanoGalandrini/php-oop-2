<?php

include_once __DIR__ . "/models/makeProducts.php";
include_once __DIR__ . "/models/db.php";

$factory = new ProductFactory();
$products = $factory->createProducts($products);

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
	<?php
	foreach ($products as $product) {
	?>
		<?= $product->getProductCard() ?>
	<?php
	}
	?>
	</div>
	</div>
</body>

</html>
