<?php

// On inclut l'autoload de Composer
require __DIR__.'/../vendor/autoload.php';

use sonic\Controllers\ErrorController;


// on instancie AltoRouter
$router = new AltoRouter();

$publicFolder = dirname($_SERVER['SCRIPT_NAME']);
//dump($publicFolder);

//*-------------------------------------------------------------------
//*------------------------- PARTIE ROUTER ---------------------------
//*-------------------------------------------------------------------

$router->setBasePath($publicFolder);

// on map notre route Home (page d'acceuil)
$router->map(
    // la méthode HTTP
    'GET',
    // Route/motif de l'url
    '/',
    // Destination
    [
        'controller' => 'sonic\Controllers\MainController',
        'method' => 'home',
    ],
    // Nom de la route 'pour référence interne à Altorouter
    'main_home',
);

//*-------------------------------------------------------------------
//*------------------------- PARTIE DISPATCHER -----------------------
//*-------------------------------------------------------------------

// Y a t il une correspondance ? (entre la requête et nos routes)
$match = $router->match();

//dump($match);

// Si une correspondance est trouvée

if ($match) {

    // le tableau de distination se trouve dans $match['target']

    $controllerName = $match['target']['controller'];
    $methodName = $match['target']['method'];

    // Instanciation de la classe MainController
    $controller = new $controllerName();
    // Appel de la méthode correspondant à ce point d'entrée (page)
    // /!\ On appelle la méthode qui correspond au contenu de la variable $methodName

    // On transmet les paramètres d'URL reçu d'Altorouter via $match['params']
    $controller->$methodName();

} else {

    $controller = new ErrorController();
    $controller->error404();
}
