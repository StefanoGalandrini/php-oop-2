<?php

include "product.php";

class DogProduct extends Product
{
	private $type;

	public function __construct($name, $price, $type)
	{
		parent::__construct($name, $price);
		$this->type = $type;
	}

	public function gettype()
	{
		return $this->type;
	}

	public function settype($type)
	{
		$this->type = $type;
	}
}
