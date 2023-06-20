<?php

include_once __DIR__ . "/product.php";

class DogProduct extends Product
{
	private string $type;

	public function __construct(
		string $name,
		float $price,
		string $type
	) {
		parent::__construct($name, $price);

		if (!in_array($type, self::$validTypes)) {
			die("Tipi consentiti: Cibo, Cuccia, Giocattolo");
		} else {
			$this->type = $type;
		}
	}

	public function getType()
	{
		return $this->type;
	}

	public function setType($type)
	{
		if (!in_array($type, self::$validTypes)) {
			die("Tipi consentiti: Cibo, Cuccia, Giocattolo");
		}
		$this->type = $type;
	}
}
