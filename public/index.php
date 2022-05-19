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

