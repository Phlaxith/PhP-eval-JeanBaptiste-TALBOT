<?php

namespace App\services; // utilisation du namespace "App\services"


// utilisation et importation des différents namespaces contenus dans leurs classes respectives --> les classes sont écrites en bleu
use App\structures\Service;  
use App\features\Runnable;
use App\features\RunnableInterface;
use App\resources\Router;

// utilise du namespace App\functions et lui donne un alias "fn"
// l'interet de donner un alias permet d'écrire "fn" à la place de "App\functions" 
use App\functions as fn;

class App extends Service implements AppInterface, RunnableInterface // création de la classe App, héritant de la classe Service et implémentant deux interfaces AppInterface, RunableInterface
{
	use Runnable; // comme le trait permet d'outrepasser l'héritage multiple, ici c'est comme si la classe App héritait de la classe Service ET de la classe Runnable

	protected function runnable_run()
	{

		// bloc try-catch,  on exécute le code dans le bloc try et si c'est un échec, on éxecutera l'erreur contenue dans le bloc catch
		try 
		{
			$routes = []; // la variable $routes est un tableau
			$router = new Router($routes); // la variable $router permet d'instancier des objets de la classe Router
			echo $router();	// on "transforme" la variable $router en fonction, qui exécute son contenu
		}
		catch (\Throwable $exception)
		{
			die(fn\exceptionToHtml($exception)); // quitte et affiche le bloc d'erreur exceptionToHtml
		}
	}
}