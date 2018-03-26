<?php

namespace App\features;  // utilisation d'un namespace "App\feature"

trait Runnable 	// créé un trait : semblable à une classe, sauf qu'un trait n'est pas instanciable.
				// cela permet de pouvoir accéder aux méthodes du trait de partout. 

{
	public function __invoke(iterable ... $params) //  ça permet de pouvoir appeler un objet en tant que fonction
													// les ' ... ' est un opérateur de décomposition, les arguments restants vont directement dans la variable $params
	{
		return $this->runnable_run(... $params);
	}

	protected function runnable_run() // la fonction runnable_run retourne le nom de la classe de l'object actuel ($this)
	{
		return get_class($this);
	}
}