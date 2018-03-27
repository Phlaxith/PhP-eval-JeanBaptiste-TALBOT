<?php

namespace App\resources;

use App\structures\Resource;
use App\features\Runnable;
use App\features\RunnableInterface;
use App\functions as fn;

class Router extends Resource implements RouterInterface, RunnableInterface
{
	use Runnable;

	protected $routes = [];

	public function __construct(iterable $routes = [])
	{
		$this->setRoutes($routes);
	}

	public function setRoutes(iterable $routes) :RouterInterface
	{
		$this->routes = $routes;
		return $this;
	}

	public function getRoutes() :iterable
	{
		return $this->routes;
	}

	protected function runnable_run()
	{

// 		$url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
// 		foreach($this->routes as $patter=> $route ){
// 		// URL courante = url du fichier routes.conf.json
// if($pattern === $path) return new $route;
// 			// ...

// 			return new $route;
// 		}
		return 'Hello World';
	}
}