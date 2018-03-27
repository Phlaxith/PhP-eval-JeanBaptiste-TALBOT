<?php

namespace App\functions;

function writeJson(string $conf) :array{
    $configContent = [];  // on crée un tableau, qui sera notre tableau final qui contiendra les autres tableaux
    
    $fichier = scandir($conf); //scanndir permet de lister les fichiers présents dans le chemin mis en paramètre 
    
        // boucle pour parcourir tant qu'il y a des fichiers dans le dossier
        foreach ($fichier as $fic) {

            // on exclut les fichiers cachés dans le dossier
            if($fic === '.' || $fic === '..') continue;

            // Si le chemin mis en paramètre est un dossier
            if(is_dir($conf . '/' . $fic)){
                $configContent[$fic] = writeJson($conf.'/'.$fic);
            }
            else{
                // on récupère le nom du fichier parcouru, mais on fait un substr pour enlever les ".conf.json"
                $indexFichier = //str_replace('.conf.json','',$fic);
                strtok(basename($fic) , '.');
        
                // ici, on récupère des tableaux avec les contenus des fichiers Json
                $contenuFichier = json_decode(file_get_contents($conf.'/'.$fic), true);

                // enfin on met les tableaux Json précèdents dans le tableau final, et on met les noms des fichiers en index
                $configContent[$indexFichier] = $contenuFichier;
            }
        }
     return $configContent;
    }
   
 

// $arr = json_decode($json); // renvoie un objet
// $arr = json_decode($json, true); //renvoie un array

