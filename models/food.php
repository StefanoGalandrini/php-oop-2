<?php

include_once __DIR__ . "/product.php";

class Food extends Product
{
	public function __construct(
		Category $category,
		private string $name,
		private float $price,
		private string $flavor,
	) {
		parent::__construct($category, 'Cibo');
		$this->name = $name;
		$this->setPrice($price);
		$this->flavor = $flavor;
	}

	public function getName(): string
	{
		return $this->name;
	}

	public function getPrice(): string
	{
		return number_format($this->price, 2, ',', '');
	}

	public function getFlavor()
	{
		return $this->flavor;
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
