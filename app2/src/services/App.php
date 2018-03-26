<?php

namespace App\services;

use App\structures\Service;
use App\features\Runnable;
use App\features\RunnableInterface;
use App\resources\Router;
use App\functions as fn;

class App extends Service implements AppInterface, RunnableInterface
{
	use Runnable;

	protected function runnable_run()
	{
		try 
		{
			$routes = [];
			$router = new Router($routes);
			echo $router();
		}
		catch (\Throwable $exception)
		{
			die(fn\exceptionToHtml($exception));
		}
	}
}