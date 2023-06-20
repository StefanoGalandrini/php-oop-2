<?php

include_once __DIR__ . "/product.php";

class Bed extends Product
{
	public function __construct(
		Category $category,
		private string $name,
		private float $price,
		private string $size,
	) {
		parent::__construct($category, 'Cuccia');
		$this->name = $name;
		$this->setPrice($price);
		$this->size = $size;
	}

	public function getName(): string
	{
		return $this->name;
	}

	public function getPrice(): string
	{
		return number_format($this->price, 2, ',', '');
	}

	public function getSize()
	{
		return $this->size;
	}

	public function setPrice(float $price): void
	{
		if ($price < 0) {
			die("Il prezzo deve essere maggiore di zero");
		} else {
			$this->price = round($price, 2);
		}
	}

	// method to build the string to show the product image in <img src="...">
	public function getProductImage()
	{
		return "assets/img/" . strtolower($this->category->getType()) . "/" . strtolower($this->type) . ".jpg";
	}
}
