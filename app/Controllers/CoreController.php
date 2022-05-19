<?php

namespace sonic\Controllers;

/**
 * Class CoreController pour éviter la répétition de la méthode show dans chaque Controller
 * 
 */

class CoreController
{
    protected function show($viewName, $viewData = [])
    {
        // On récupère la variable $router qui se trouve au niveau "global" de PHP
        // Donc le $router d'index.php
        // @todo : trouver mieux

        global $router;

        extract($viewData);


        //on va déclarer notr URL absolue grâce à la superglobale $_SERVER
        // avec la cle ''

        $absoluteURL = dirname($_SERVER['SCRIPT_NAME']);


        // on va venir charger nos vues (header + viewName + footer)
        // $viewData est dispo dans chaque fichier de vue
        require_once __DIR__ . "/../views/header.tpl.php";
        require_once __DIR__ . "/../views/{$viewName}.tpl.php";
        require_once __DIR__ . "/../views/footer.tpl.php";
    }
}