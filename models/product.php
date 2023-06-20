<?php


class Product
{
	private $name;
	private $price;

	public function __construct($name, $price)
	{
		$this->name = $name;
		$this->price = $price;
	}

	public function getname()
	{
		return $this->name;
	}

	public function getprice()
	{
		return $this->price;
	}

	public function setname($name)
	{
		$this->name = $name;
	}

	public function setprice($price)
	{
		$this->price = $price;
	}
}
