<?php

namespace MealOclock\Controllers;

// Classe "coeur" des Controllers
// sera héritée par les controllers pour hériter :
//  - de ses propriétés
//  - de ses méthodes
class CoreController {
    // Je stocke le moteur de template dans une propriété de la classe pour que ce soit accessible à toutes ses méthodes
    protected $templates;
        
    // $app = Application passé en paramètre lors du "dispatch"
    public function __construct($app) {
        // Je crée une instance du moteur de Templates
        $this->templates = new \League\Plates\Engine(__DIR__.'/../Views');
        
        // Je définis des données utiles pour toutes les templates
        $this->templates->addData([
            'title' => 'MealOclock', // => $title
            'machins' => 'Rémy',
            'basePath' => $app->getConfig('BASEPATH').'/', // => $basePath
            'router' => $app->getRouter() // => $router
        ]);
    }
    
    // Méthode permettant d'afficher le code HTML en passant par le système de views
    public function render() {
        // TODO
    }
    
    // Méthode permettant d'afficher un résultat sous forme de JSON
    // (utile quand la page est appelée via Ajax)
    public function sendJSON($data) {
        // TODO
    }
    
    // Méthode permettant d'envoyer un code HTTP dans l'entête de réponse HTTP
    // on peut en plus afficher un message ou du code HTML
    public function sendHttpError($code, $source='') {
        // TODO
    }
}
