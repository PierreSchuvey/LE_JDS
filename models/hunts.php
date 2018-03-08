<?php

class hunts extends dataBase {

    public $id = 0;
    public $idPokemon = '';
    public $idVersion = 0;
    public $idMethod = 0;
    public $nbEncounter = 0;
    public $beginDate = '';
    public $endDate = '';
    public $idUser = 0;
    public $idGen = 0;

    public function __construct() {
        parent::__construct();
    }

    public function getExistHunt() {
        $query = 'SELECT `idPokemon`, `idUser` FROM `hunts` WHERE `idUser` = :idUser AND `idPokemon` = :idPokemon AND catchStatement = 0';
        $getExistHunt = $this->db->prepare($query);
        $getExistHunt->bindValue(':idPokemon', $this->idPokemon, PDO::PARAM_INT);
        $getExistHunt->bindValue(':idUser', $this->idUser, PDO::PARAM_INT);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        $getExistHunt->execute();
        return $getExistHunt = $getExistHunt->fetch(PDO::FETCH_OBJ);
    }

    public function savingHunt() {
        $query = 'UPDATE `hunts` SET nbEncounter=:nbEncounter, idVersion=:idVersion, idMethod=:idMethod WHERE idUser = :idUser AND idPokemon = :idPokemon';
        $savingHunt = $this->db->prepare($query);
        $savingHunt->bindValue(':nbEncounter', $this->nbEncounter, PDO::PARAM_INT);
        $savingHunt->bindValue(':idVersion', $this->idVersion, PDO::PARAM_INT);
        $savingHunt->bindValue(':idMethod', $this->idMethod, PDO::PARAM_INT);
        $savingHunt->bindValue(':idUser', $this->idUser, PDO::PARAM_INT);
        $savingHunt->bindValue(':idPokemon', $this->idPokemon, PDO::PARAM_INT);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        return $savingHunt->execute();
    }

    public function validHunt() {
        $query = 'UPDATE `hunts` SET idVersion = :idVersion, idMethod=:idMethod, nbEncounter=:nbEncounter, endDate = NOW(), catchStatement=1 WHERE idUser = :idUser AND idPokemon = :idPokemon';
        $validHunt = $this->db->prepare($query);
        $validHunt->bindValue(':idVersion', $this->idVersion, PDO::PARAM_INT);
        $validHunt->bindValue(':idMethod', $this->idMethod, PDO::PARAM_INT);
        $validHunt->bindValue(':nbEncounter', $this->nbEncounter, PDO::PARAM_INT);
        $validHunt->bindValue(':idUser', $this->idUser, PDO::PARAM_INT);
        $validHunt->bindValue(':idPokemon', $this->idPokemon, PDO::PARAM_INT);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        return $validHunt->execute();
    }

    public function getFinishedHunt() {
        $query = 'SELECT hunts.id AS id, pokemon.nomPkm AS pokemon, huntMethods.methode AS method, versions.version AS version, hunts.nbEncounter AS nbEncounter,  hunts.endDate AS endDate FROM hunts LEFT JOIN pokemon ON pokemon.id = hunts.idPokemon LEFT JOIN huntMethods ON huntMethods.id = hunts.idMethod LEFT JOIN versions ON versions.id = hunts.idVersion WHERE hunts.idUser = :idUser AND hunts.catchStatement=1 ORDER BY `endDate` DESC';
        $getFinishedHunt = $this->db->prepare($query);
        $getFinishedHunt->bindValue(':idUser', $this->idUser, PDO::PARAM_INT);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        $getFinishedHunt->execute();
        return $getFinishedHunt = $getFinishedHunt->fetchAll(PDO::FETCH_OBJ);
    }

    public function lastCapture() {
        $query = 'SELECT `hunts`.`nbEncounter` AS `nbEncouter`, `pokemon`.`nomPkm` AS `nomPkm`, `versions`.`version` AS `vesions`, `huntMethods`.`methode` AS `methode` FROM `hunts` INNER JOIN `pokemon` ON `hunts`.`idPokemon` = `pokemon`.`id` INNER JOIN `versions` ON `hunts`.`idVersion` = `versions`.`id` INNER JOIN `huntMethods` ON `hunts`.`idMethod` = `huntMethods`.`id` WHERE `idUser` = :idUser AND `catchStatement` = 1 AND `endDate`=(SELECT MAX(`endDate`) FROM `hunts`)';
        $lastCapture = $this->db->prepare($query);
        $lastCapture->bindValue(':idUser', $this->idUser, PDO::PARAM_INT);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        $lastCapture->execute();
        return $lastCapture = $lastCapture->fetch(PDO::FETCH_OBJ);
    }

    public function addNewHunt() {
        $query = 'INSERT INTO `hunts`(`idPokemon`,  `catchStatement`, `idUser`) VALUES(:idPokemon, 0, :idUser)';
        $addNewHunt = $this->db->prepare($query);
        $addNewHunt->bindValue(':idPokemon', $this->idPokemon, PDO::PARAM_INT);
        $addNewHunt->bindValue(':idUser', $this->idUser, PDO::PARAM_INT);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        return $addNewHunt->execute();
    }

    public function getSavedHuntListPagination($offset) {

        //On prépare la requête sql qui insert les champs sélectionnés, les valeurs de type :lastname sont des marqueurs nominatifs
        $query = 'SELECT hunts.id AS id, pokemon.nomPkm AS pokemon, huntMethods.methode AS method, versions.version AS version, hunts.nbEncounter AS nbEncounter FROM hunts LEFT JOIN pokemon ON pokemon.id = hunts.idPokemon LEFT JOIN huntMethods ON huntMethods.id = hunts.idMethod LEFT JOIN versions ON versions.id = hunts.idVersion WHERE hunts.idUser = :idUser AND hunts.catchStatement=0 ORDER BY `nbEncounter` LIMIT 11 OFFSET :offset';
        $savedHuntList = $this->db->prepare($query);
        $savedHuntList->bindValue(':offset', $offset, PDO::PARAM_INT);
        $savedHuntList->bindValue(':idUser', $this->idUser, PDO::PARAM_INT);
        //Si l'insertion s'est correctement déroulée, on retourne true car execute() est un booléen
        if ($savedHuntList->execute()) {
            $savedHuntList = $savedHuntList->fetchAll(PDO::FETCH_OBJ);
        } else {
            $savedHuntList = false;
        }
        return $savedHuntList;
    }

    /**
     * Récupérer le nombre de patient
     */
    public function countSavedhunt() {
        $query = 'SELECT COUNT(`id`) AS `numberOfSavedHunt` FROM `hunts` WHERE `catchStatement`=0;';
        $savedHuntCount = $this->db->query($query);
        $savedHuntCount = $savedHuntCount->fetch(PDO::FETCH_OBJ);
        return $savedHuntCount;
    }

    public function getFinishedHuntListPagination($offset) {

        //On prépare la requête sql qui insert les champs sélectionnés, les valeurs de type :lastname sont des marqueurs nominatifs
        $query = 'SELECT hunts.id AS id, pokemon.nomPkm AS pokemon, huntMethods.methode AS method, versions.version AS version, hunts.nbEncounter AS nbEncounter,  hunts.endDate AS endDate FROM hunts LEFT JOIN pokemon ON pokemon.id = hunts.idPokemon LEFT JOIN huntMethods ON huntMethods.id = hunts.idMethod LEFT JOIN versions ON versions.id = hunts.idVersion WHERE hunts.idUser = :idUser AND hunts.catchStatement=1 ORDER BY `endDate` DESC LIMIT 7 OFFSET :offset';
        $finishedHuntList = $this->db->prepare($query);
        $finishedHuntList->bindValue(':offset', $offset, PDO::PARAM_INT);
        $finishedHuntList->bindValue(':idUser', $this->idUser, PDO::PARAM_INT);
        //Si l'insertion s'est correctement déroulée, on retourne true car execute() est un booléen
        if ($finishedHuntList->execute()) {
            $finishedHuntList = $finishedHuntList->fetchAll(PDO::FETCH_OBJ);
        } else {
            $finishedHuntList = false;
        }
        return $finishedHuntList;
    }

    /**
     * Récupérer le nombre de patient
     */
    public function countFinishedhunt() {
        $query = 'SELECT COUNT(`id`) AS `numberOfFinishedHunt` FROM `hunts` WHERE `catchStatement` = 1';
        $savedHuntCount = $this->db->query($query);
        $savedHuntCount = $savedHuntCount->fetch(PDO::FETCH_OBJ);
        return $savedHuntCount;
    }

    public function countFinishedHuntByGen() {

        //On prépare la requête sql qui insert les champs sélectionnés, les valeurs de type :lastname sont des marqueurs nominatifs
        $query = 'SELECT COUNT(hunts.id) AS numberOfFinishedHunt, pokemon.idGen FROM hunts INNER JOIN pokemon ON pokemon.id = hunts.idPokemon WHERE hunts.idUser = :idUser AND hunts.catchStatement = 1 GROUP BY pokemon.idGen';
        $finishedHuntListByGen = $this->db->prepare($query);
        $finishedHuntListByGen->bindValue(':idUser', $this->idUser, PDO::PARAM_INT);
        //Si l'insertion s'est correctement déroulée, on retourne true car execute() est un booléen
        if ($finishedHuntListByGen->execute()) {
            $finishedHuntListByGen = $finishedHuntListByGen->fetchAll(PDO::FETCH_OBJ);
        } else {
            $finishedHuntListByGen = false;
        }
        return $finishedHuntListByGen;
    }

    public function __destruct() {

    }

}

?>