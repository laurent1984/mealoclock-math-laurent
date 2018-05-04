<?php

namespace MealOclock\Controllers;

// J'importe les classes d'autres namespace
use MealOclock\Models\CommunityEvent;



class EventController extends CoreController {
    public function show() {
        $eventModel = new EventModel();
        $event = $eventModel->findAll();
        echo $this->templates->render('event/list', [
            'eventId' => $id,
            'currentEvent' => $event
        ]);
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
