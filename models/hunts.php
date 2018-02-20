<?php

class hunts extends dataBase {

    public $id = 0;
    public $pokemon = '';
    public $version = '';
    public $method = '';
    public $nbEncounter = 0;
    public $beginDate = '';
    public $endDate = '';
    public $idUser = 0;

    public function __construct() {
        parent::__construct();
    }

    public function getExistHunt() {
        $query = 'SELECT `pokemon`, `idUser` FROM `hunts` WHERE `idUser` = :idUser AND `pokemon` = :pokemon AND catchStatement = 0';
        $getExistHunt = $this->db->prepare($query);
        $getExistHunt->bindValue(':pokemon', $this->pokemon, PDO::PARAM_STR);
        $getExistHunt->bindValue(':idUser', $this->idUser, PDO::PARAM_INT);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        $getExistHunt->execute();
        return $getExistHunt = $getExistHunt->fetch(PDO::FETCH_OBJ);
    }

    public function savingHunt() {
        $query = 'UPDATE `hunts` SET version = :version, method=:method, nbEncounter=:nbEncounter WHERE idUser = :idUser AND pokemon = :pokemon';
        $savingHunt = $this->db->prepare($query);
        $savingHunt->bindValue(':version', $this->version, PDO::PARAM_STR);
        $savingHunt->bindValue(':method', $this->method, PDO::PARAM_STR);
        $savingHunt->bindValue(':nbEncounter', $this->nbEncounter, PDO::PARAM_INT);
        $savingHunt->bindValue(':idUser', $this->idUser, PDO::PARAM_INT);
        $savingHunt->bindValue(':pokemon', $this->pokemon, PDO::PARAM_STR);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        return $savingHunt->execute();
    }

    public function validHunt() {
        $query = 'UPDATE `hunts` SET version = :version, method=:method, nbEncounter=:nbEncounter, endDate = NOW(), catchStatement=1 WHERE idUser = :idUser AND pokemon = :pokemon';
        $savingHunt = $this->db->prepare($query);
        $savingHunt->bindValue(':version', $this->version, PDO::PARAM_STR);
        $savingHunt->bindValue(':method', $this->method, PDO::PARAM_STR);
        $savingHunt->bindValue(':nbEncounter', $this->nbEncounter, PDO::PARAM_INT);
        $savingHunt->bindValue(':idUser', $this->idUser, PDO::PARAM_INT);
        $savingHunt->bindValue(':pokemon', $this->pokemon, PDO::PARAM_STR);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        return $savingHunt->execute();
    }

    public function getSavedHunt() {
        $query = 'SELECT `pokemon`, `version`, `method`, `nbEncounter` FROM `hunts` WHERE `idUser` = :idUser AND `catchStatement` = 0';
        $getSavedHunt = $this->db->prepare($query);
        $getSavedHunt->bindValue(':idUser', $this->idUser, PDO::PARAM_INT);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        $getSavedHunt->execute();
        return $getSavedHunt = $getSavedHunt->fetchAll(PDO::FETCH_OBJ);
    }

    public function lastCapture() {
        $query = 'SELECT `nbEncounter`, `pokemon`, `version`, `method` FROM `hunts` WHERE `idUser` = :idUser AND catchStatement = 1 AND endDate=(SELECT max(endDate) FROM hunts)';
        $lastCapture = $this->db->prepare($query);
        $lastCapture->bindValue(':idUser', $this->idUser, PDO::PARAM_INT);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        $lastCapture->execute();
        return $lastCapture = $lastCapture->fetch(PDO::FETCH_OBJ);
    }

    public function addNewHunt() {
        $query = 'INSERT INTO `hunts`(`pokemon`,  `catchStatement`, `idUser`) VALUES(:pokemon, 0, :idUser)';
        $addNewHunt = $this->db->prepare($query);
        $addNewHunt->bindValue(':pokemon', $this->pokemon, PDO::PARAM_STR);
        $addNewHunt->bindValue(':idUser', $this->idUser, PDO::PARAM_INT);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        return $addNewHunt->execute();
    }

    public function __destruct() {

    }

}

?>