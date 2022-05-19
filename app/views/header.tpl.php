<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <link rel="icon" href="<?= $absoluteURL ?>/assets/images/sonic.svg">
    <link rel="stylesheet" href="<?= $absoluteURL ?>/assets/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300;400;500&display=swap" rel="stylesheet">
    <title>SANIC - <?= $viewData['page_title'] ?></title>
</head>
<body>


<header>
    <img src="<?= $absoluteURL ?>/assets/images/Sonic_Team_Logo.svg" alt="sonic taem logo">
<h1>SONIC VA VOUS CAUSER</h1>
<nav>
    <ul>
        <a href="<?= $absoluteURL?>"><li>HOME</li></a>
        <a href="<?= $router->generate('designers') ?>"><li>DESIGNERS</li></a>
        
    </ul>
</nav>

</header>

