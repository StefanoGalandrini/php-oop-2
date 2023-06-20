<?php

include_once __DIR__ . "/category.php";

class Product
{
	protected static $validTypes = ["Cibo", "Cuccia", "Giocattolo"];

	public function __construct(
		protected Category $category,
		protected string $type
	) {

		if (!in_array($this->type, self::$validTypes)) {
			die("Tipi consentiti: Cibo, Cuccia, Giocattolo");
		}
		$this->category = $category;
		$this->type = $type;
	}


	// getter methods maybe to be removed
	public function getType()
	{
		return $this->type;
	}

	public function getCategory()
	{
		return $this->category;
	}

	// method to build the string to show the product icon in <img src="...">
	public function getIconPath()
	{
		$iconPath = strtolower($this->type) . '.jpg';
		return 'assets/img/icon-' . $iconPath;
	}
}
