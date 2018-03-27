<?php

namespace App\features;

trait Stringable
{
	public function __toString() :string
	{
		return $this->stringable_stringify(); // correction d'une erreur !
	}

	protected function stringable_stringify() :string
	{
		return '';
	}
}