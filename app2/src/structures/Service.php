<?php

namespace App\structures;

abstract class Service
{
	protected static $instance;

	public static function getInstance()
	{
		if (!static::$instance) static::$instance = new static;
		return static::$instance;
	}

	protected function __construct() { }

}