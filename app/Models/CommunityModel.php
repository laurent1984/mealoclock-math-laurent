<?php

namespace MealOclock\Models;

// J'importe les classes se trouvant dans un autre namespace
use MealOclock\Database;
use PDO;

/* Règles :
  - 1 table = 1 model
  - 1 champ = 1 propriété
*/
class CommunityModel {
  // Je crée une propriété pour chaque champ/colonne de la table
  private $id;
  private $name;
  private $slug;
  private $description;
  private $image;
  private $status;
  private $date_inserted;
  private $date_updated;
  
  /* CRUD sur la table 'community'
  Create => insert()
  Read => find()
  Update => update()
  Delete => delete()
  */
  // Méthode permettant de gérer la sauvegarde en BDD
  // elle va détecter seul si elle insère ou met à jour
  public function save() {
    // Si on a un id => alors la ligne existe dans la table
    // => on met à jour
    if ($this->id > 0) {
      $retour = $this->update();
      return $retour;
    }
    // Sinon, la ligne n'existe pas dans la table
    // => on insère dans la table
    else {
      return $this->insert();
    }
  }
 
  // Méthode privée car seule la méthode save() va l'utiliser
  private function insert() {
   // TODO
  }

  public function find($id) {
    $sql = '
        SELECT *
        FROM community
        WHERE id = '.$id;
    // J'exécute ma requête
    $pdoStatement = Database::getPDO()->query($sql);
    
    // Je récupère LE résultat
    $result = $pdoStatement->fetchObject('\MealOclock\Models\CommunityModel');
    
    return $result;
  }

  // Méthode privée car seule la méthode save() va l'utiliser
  private function update() {
   // TODO
  }

  public function delete() {
   // TODO
  }


  // Méthode permettant de retourner toutes les communautés
  public function findAll() {
    $sql = '
      SELECT *
      FROM community
    ';
    // Utilisation de notre classe Database pour se connecter à la database
    $pdo = Database::getPDO();
    
    // exécution de la requête
    $pdoStatement = $pdo->query($sql);
    
    // Je veux récupérer tous les résultats sous forme de tableau d'objet CommunityModel
    // on doit préciser le FQCN de la classe
    $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, '\MealOclock\Models\CommunityModel');
    
    // On retourne les résultats
    return $results;
  }
 
 /**
  * Returns if slug already exists
  * 
  * @param string $slug
  * @return bool
  */
 public function slugExists($slug) {
   // TODO
 }
  
  // Getters
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
  
  // Setters
  public function setName($name) {
    // Dans un setter, je peux tester la valeur qu'on veut affecter à la propriété
    // ici une valeur "string" non vide
    if (is_string($name) && !empty($name)) {
      $this->name = $name;
    }
  }
  public function setSlug($slug) {
    if (is_string($slug) && !empty($slug)) {
      $this->slug = $slug;
    }
  }
  public function setDescription($description) {
    if (is_string($description) && !empty($description)) {
      $this->description = $description;
    }
  }
  public function setImage($image) {
    if (is_string($image) && !empty($image)) {
      $this->image = $image;
    }
  }
  public function setStatus($status) {
    // Dans un setter, je peux tester la valeur qu'on veut affecter à la propriété
    // ici une valeur numérique supérieure à 0
    if (is_numeric($status) && $status > 0) {
      $this->status = $status;
    }
  }
}
