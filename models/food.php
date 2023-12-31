<?php

include_once __DIR__ . "/Product.php";
include_once __DIR__ . "/PriceFormatter.php";

class Food extends Product
{

	use PriceFormatter;

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

	public function getName()
	{
		return $this->name;
	}

	public function getPrice()
	{
		return $this->formatPrice($this->price);
	}

	public function getFlavor()
	{
		return $this->flavor;
	}

	public function setPrice(float $price)
	{
		if ($price < 0) {
			throw new Exception("Il prezzo deve essere maggiore di zero");
		} else {
			$this->price = round($price, 2);
		}
	}

	// method to build the string to show the product image in <img src="...">
	public function getProductImage()
	{
		return "assets/img/" . strtolower($this->category->getType()) . "/" . strtolower($this->type) . ".jpg";
	}

	// method to generate html for product
	public function getProductCard()
	{
		return '
	<div class="card">
		<h2 class="title">' . $this->getType() . ' per ' . $this->category->getType() . '</h2>
		<img class="product-image" src="' . $this->getProductImage() . '"
			alt="' . $this->getName() . '">
		<p>Tipo: <span>' . $this->getName() . '</span></p>
		<p>Prezzo: <span>€ ' . $this->getPrice() . '</span></p>
		<p>Sapore: <span>' . $this->getFlavor() . '</span></p>
		<img class="icon" src="' . $this->getIconPath() . '"
			alt="Icona del prodotto">
	</div>';
	}
}
