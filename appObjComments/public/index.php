<?php // balise d'ouverture d'un script php

use App\services\App; // Utilisation et importation du namespace App\services contenu dans la class App

$root   = rtrim(str_replace('\\', '/', dirname(__DIR__))).'/'; 
// la variable $root correspond au chemin courant 
// la fonction rtrim permet de supprimer les espaces en fin de chaîne. 
// la fonction  str_replace (dans ce cas-là) permet de remplacer tous les antislashs "\" du chemin courant par des slashs "/"

// ex : C:\\Users\ deviendra --> C://Users/

$public = $root.'public/';
// la variable $public est la concaténation de la string du chemin courant avec la chaîne "public/"  => 'CheminCourant/public/'

$src    = $root.'src/';
// la variable $src est la concaténation de la string du chemin courant avec la chaîne "src/" => 'CheminCourant/src/


// Définition de trois constantes (avec la convention de nommage en MAJUSCULE avec les différents mots séparés de ' _ ')
// la fonction define permet de définir des constantes avec en premier paramètre leurs noms et en deuxième paramètre leurs valeurs)
define('PATH_ROOT', $root);
define('PATH_PUBLIC', $public);
define('PATH_SRC', $src);


// la fonction include récupère un fichier grâce à son chemin 
include($src.'functions/debug.php');

// gestion des erreurs
set_error_handler('App\functions\errorHandler');

// la fonction include récupère un fichier grâce à son chemin 
include($src.'features/Runnable.php');
include($src.'features/RunnableInterface.php');
include($src.'features/Stringable.php');
include($src.'features/StringableInterface.php');
include($src.'structures/Resource.php');
include($src.'structures/Service.php');
include($src.'resources/RouterInterface.php');
include($src.'resources/Router.php');
include($src.'services/AppInterface.php');
include($src.'services/App.php');

// la variable $app appelle la méthode implémentée getInstance par la classe App, qui permet de créer une instance de la classe App
$app = App::getInstance(); 

// ensuite on appelle la variable $app, grâce aux parenthèses () ce qui permet d'éxecuter "App::getInstance()"
$app();