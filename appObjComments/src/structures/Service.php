<?php

namespace App\structures; // utilise le namespace "App\structures"

abstract class Service // création d'une classe Service Abstraite
						// cette classe est un exemple typique d'un Singleton, il ne peut y avoir qu'une seule instance
{
	protected static $instance;

	public static function getInstance()
	{
		if (!static::$instance) static::$instance = new static; // on retrouve bien le principe du Singleton : s'il n'y a pas d'instance, on en crée une, sinon on retourne l'existante
																// UNE et UNE SEULE instance possible !
		return static::$instance;
	}

	protected function __construct() { } // un Singleton à besoin d'un constructeur vide.

}