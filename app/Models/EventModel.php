<?php

namespace MealOclock\Models;

use MealOclock\Database;
use PDO;

class EventModel {
    private $id;
    private $title;
    private $description;
    private $price;
    private $date_event;
    private $address;
    private $zipcode;
    private $city;
    private $nb_guests;
    private $is_virtual;
    private $virtual_address;
    private $status;
    private $date_inserted;
    private $date_updated;
    private $community_id;
    private $user_id;

    /*CRUD
    Create=> insert()
    Read=> find()
    Update=> update()
    Delete=> delete()
    */
    //methode permettant de gerer la sauvegarde en BDD
    public function save() {
        // si on a un id alores la ligne existe dans la table
        // alors on mets a jour
        if ($this->id > 0) {
            $retour = $this->update();
            return $retour;
        }
        //sinon on insert dans la table
        else {
            return $this->insert();
        }
    }

    //methode privee car seule la methode save() va l'utiliser
    private function insert() {

    }

    public function find() {

    }

    private function update() {

    }

    public function delete() {

    }

    //Methode permettant de retourner tt les commu
    public function findAll() {
        $sql = '
        SELECT *
        FROM event
        ';
        $pdo = Database::getPDO();
        //execution
        $pdoStatement = $pdo->query($sql);

        //recuperation tout les resultat sous forme de tableaux debjet sous forme CommunityModel
        //On doit preciser FQCN de la classe

        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, '\MealOclock\Models\EventModel');

        return $results;
    }

    /**
    * Returns if slug already exits
    *
    * @param string $slug
    * @return bool
    */
    public function slugExits($slug) {
        //TODO
    }

    //Getters

    public function getId() {
        return $this->id;
    }
    public function getTitle() {
        return $this->title;
    }
    public function getDescription() {
        return $this->description;
    }
    public function getPrice() {
        return $this->price;
    }
    public function getDateEvent() {
        return $this->date_event;
    }
    public function getAddress() {
        return $this->address;
    }
    public function getZipcode() {
        return $this->zipcode;
    }
    public function getCity() {
        return $this->city;
    }
    public function getNbGuests() {
        return $this->nb_guests;
    }
    public function getIsVirtual() {
        return $this->is_virtual;
    }
    public function getVirtualAddress() {
        return $this->virtual_address;
    }
    public function getStatus() {
        return $this->status;
    }
    public function getDateInserted() {
        return $this->date_inserted;
    }
    public function getDateUpdated() {
        return $this->date_updated;
    }
    public function getCommunityId() {
        return $this->community_id;
    }
    public function getUserId() {
        return $this->user_id;
    }

    //Setters

    public function setName($title) {
        if (is_string($title) && !empty($title)) {
            $this->title = $title ;
        }
    }

    public function setDescription($description) {
        if (is_string($description) && !empty($description)) {
            $this->description = $description ;
        }
    }

    public function setPrice($price) {
        //dans un setters, je peux tester la valeur qu'on veut affecter a la propriete
        //ici j'ai une valeur numerique superieur a 0
         if (is_numeric($price) && $price > 0) {
             $this->price = $price ;
         }
    }

    public function setDateEvent($date_event) {
        if (is_string($date_event) && !empty($date_event)) {
            $this->date_event = $date_event ;
        }
    }

    public function setAddress($address) {
        if (is_string($address) && !empty($address)) {
            $this->address = $address ;
        }
    }

    public function setZipcode($zipcode) {
        //dans un setters, je peux tester la valeur qu'on veut affecter a la propriete
        //ici j'ai une valeur numerique superieur a 0
         if (is_numeric($zipcode) && $zipcode > 0) {
             $this->zipcode = $zipcode ;
         }
    }
    public function setCity($city) {
        if (is_string($city) && !empty($city)) {
            $this->city = $city ;
        }
    }

    public function setNbGuests($nb_guests) {
        if (is_string($city) && !empty($nb_guests)) {
            $this->nb_guests = $nb_guests ;
        }
    }

    public function setStatus($status) {
        //dans un setters, je peux tester la valeur qu'on veut affecter a la propriete
        //ici j'ai une valeur numerique superieur a 0
         if (is_numeric($status) && $status > 0) {
             $this->status = $status ;
         }
    }


}
