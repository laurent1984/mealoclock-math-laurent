<?php

// J'inclus Composer (ils s'occupe du autoload, avec PSR-4, merci composer)
// __DIR__ = constante "magique" contenant le chemain absolu jusqu'au dossier du fichier actuel
// attention, ne pas oublier le / juste après __DIR__
require(__DIR__.'/../vendor/autoload.php');

// Je peux importer ma classe Application
use MealOclock\Application;

// J'instancie ma classe Application
$app = new Application();

// J'appelle la méthode "run"
$app->run();
