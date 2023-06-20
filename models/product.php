<?php

class Product
{
	protected static $validTypes = ["Cibo", "Cuccia", "Giocattolo"];

	public function __construct(
		private string $name,
		private float $price
	) {
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
