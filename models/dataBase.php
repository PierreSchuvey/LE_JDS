<?php

class dataBase {

    //L'attribut $db sera disponible dans ses enfants
    protected $db;

    /*
     * Méthode magique qui permet e ce connecter à la base de données
     * @return type
     */

    public function __construct() {
        try {
            $this->db = new PDO('mysql:host=localhost;dbname=leJDS;charset=utf8', 'root', 'Naruzozo02');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function __destruct() {

    }

}

?>