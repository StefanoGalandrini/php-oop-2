<?php

class Category
{
	// defines products for cats OR for dogs
	public function __construct(
		protected string $type
	) {
		if ($type != "Cane" && $type != "Gatto") {
			die("Si vendono solo articoli per cani o per gatti");
		} else {
			$this->type = $type;
		}
	}

	// no need for checking errors here since once defined it's not going to change
	// for the same reason, no setter is needed after it is constructed
	public function getType(): string
	{
		return $this->type;
	}
}
