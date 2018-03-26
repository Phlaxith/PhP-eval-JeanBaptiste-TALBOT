<?php

namespace App\features;

trait Stringable
{
	public function __toString() :string
	{
		return $this->stringable_stringify(... $params);
	}

	protected function stringable_stringify() :string
	{
		return '';
	}
}