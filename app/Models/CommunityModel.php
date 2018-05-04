<?php

namespace MealOclock\Models;

use MealOclock\Database;
use PDO;

class CommunityModel {
    private $id;
    private $name;
    private $slug;
    private $description;
    private $image;
    private $status;
    private $date_inserted;
    private $date_updated;

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

    public function find($id) {
        $sql= '
        SELECT *
        FROM communityId
        WHERE id = '.$id;
        $pdoStatement = Database::getPDO()->query($sql);
        $result = $pdoStatement->fetchObject('\MealOclock\Models\CommunityModel');
        return $result ;
    }

    private function update() {

    }

    public function delete() {

    }

    //Methode permettant de retourner tt les commu
    public function findAll() {
        $sql = '
        SELECT *
        FROM community
        ';
        $pdo = Database::getPDO();
        //execution
        $pdoStatement = $pdo->query($sql);

        //recuperation tout les resultat sous forme de tableaux debjet sous forme CommunityModel
        //On doit preciser FQCN de la classe

        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, '\MealOclock\Models\CommunityModel');

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
    public function getName() {
        return $this->name;
    }
    public function getSlug() {
        return $this->slug;
    }
    public function getDescription() {
        return $this->description;
    }
    public function getImage() {
        return $this->image;
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

    //Setters

    public function setName($name) {
        if (is_string($name) && !empty($name)) {
            $this->name = $name ;
        }
    }
    public function setSlug($slug) {
         if (is_string($slug) && !empty($slug)) {
             $this->slug = $slug ;
         }
    }
    public function setDescription($description) {
         if (is_string($description) && !empty($description)) {
             $this->description = $description ;
         }
    }
    public function setImage($image) {
         if (is_string($image) && !empty($image)) {
             $this->image = $image ;
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
