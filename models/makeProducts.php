<?php

include_once __DIR__ . "/Category.php";
include_once __DIR__ . "/Food.php";
include_once __DIR__ . "/Bed.php";
include_once __DIR__ . "/Toy.php";

class ProductFactory
{
	public function createProducts(array $productsData): array
	{
		$products = [];

		foreach ($productsData as $productData) {
			$category = new Category($productData['category']);

			switch ($productData['type']) {
				case 'Food':
					$products[] = new Food(
						$category,
						$productData['name'],
						$productData['price'],
						$productData['flavor']
					);
					break;
				case 'Toy':
					$products[] = new Toy(
						$category,
						$productData['name'],
						$productData['price'],
						$productData['materials']
					);
					break;
				case 'Bed':
					$products[] = new Bed(
						$category,
						$productData['name'],
						$productData['price'],
						$productData['size']
					);
					break;
			}
		}

		return $products;
	}
}
