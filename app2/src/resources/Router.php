<?php

namespace App\resources;

use App\structures\Resource;
use App\features\Runnable;
use App\features\RunnableInterface;
use App\functions as fn;

use App\routes;

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
		// URL courante = url du fichier routes.conf.json
		$url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		
		// parcourt le tableau $routes stocké comme propriété de la classe
 		foreach($this->$routes as $route=> $value ){

			$fichier = $routes['$key']; // contenu du fichier

			foreach($fichier as $element){ //pour chaque élément du fichier
				$url_element = $url.$element; // url de l'élément

				if($url_element === $url)	return new $route; // si les urls correspondent
		 	}
 			next($fichier); // changement de ligne
		 }
		 
	}
}