<?php

namespace MealOclock\Controllers;

class EventController extends CoreController {
    public function show() {
        
    }
    
    public function create() {
        // appel à la view
        echo $this->templates->render('event/create');
    }
    
    public function list() {
        // appel à la view
        echo $this->templates->render('event/list');
    }
}
