<?php

trait PriceFormatter
{
	public function formatPrice(float $price)
	{
		return number_format($price, 2, ',', '');
	}
}
