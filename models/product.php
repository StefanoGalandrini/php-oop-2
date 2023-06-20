<?php

include_once __DIR__ . "/category.php";

class Product
{
	public function __construct(
		protected Category $category,
		private string $name,
		private float $price
	) {
		$this->category = $category;
		$this->name = $name;
		$this->setPrice($price);
	}

	public function getname()
	{
		return $this->name;
	}

	public function getprice()
	{
		return number_format($this->price, 2, ',', '');
	}

	public function setname($name)
	{
		$this->name = $name;
	}

	public function setprice($price)
	{
		if ($price < 0) {
			die("Il prezzo deve essere maggiore di zero");
		} else {
			$this->price = round($price, 2);
		}
	}
}
