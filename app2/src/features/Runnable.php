<?php

namespace App\features;

trait Runnable
{
	public function __invoke(iterable ... $params)
	{
		return $this->runnable_run(... $params);
	}

	protected function runnable_run()
	{
		return get_class($this);
	}
}