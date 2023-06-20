<?php

include_once __DIR__ . "/category.php";

class Product
{
	protected static $validTypes = ["Cibo", "Cuccia", "Giocattolo"];

	public function __construct(
		protected Category $category,
		protected string $type
	) {
		$this->category = $category;

		if (!in_array($this->type, self::$validTypes)) {
			die("Tipi consentiti: Cibo, Cuccia, Giocattolo");
		}
	}

	public function getType(): string
	{
		return $this->type;
	}

	public function getCategory(): Category
	{
		return $this->category;
	}

	public function getImagePath(): string
	{
		$imageFileName = strtolower($this->type) . '.jpg';
		return 'assets/img/icon-' . $imageFileName;
	}
}
