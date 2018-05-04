<?php

namespace MealOclock\Controllers;

// J'importe les classes se trouvant dans un autre namespace
use MealOclock\Models\CommunityModel;

// Pas besoin d'importer CoreController, la classe est dans le même namespace
class MainController extends CoreController {
    public function home() {
        // Je demande au CommunityModel de me donner la liste de toutes les communautés
        // J'instancie le model
        $communityModel = new CommunityModel();
        // J'appelle la méthode findAll
        $communitiesList = $communityModel->findAll();
        //dump($communitiesList); exit;
        
        // J'affiche le rendu d'un template
        // Je fournis la donnée "name" et sa valeur "Ben" à la template
        echo $this->templates->render('main/home', [
            'name' => 'Ben', // => $name dans la template
            'communitiesList' => $communitiesList // $communitiesList
        ]);
    }
    
    public function cgu() {
        // J'affiche le rendu d'un template
        echo $this->templates->render('main/cgu');
    }
    
    public function legal() {
        // J'affiche le rendu d'un template
        echo $this->templates->render('main/legal');
    }
    
    public function faq() {
        // J'affiche le rendu d'un template
        echo $this->templates->render('main/faq');
    }
    
    // Méthode ne gérant que la soumission du formulaire en POST de la page FAQ
    public function faqPost() {
        // Si form soumis
        if (!empty($_POST)) {
            dump($_POST);exit;
            // Todo traiter le formulaire
        }
    }
}
