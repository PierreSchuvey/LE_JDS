<?php

class safaryFriend extends dataBase {

    public $id = 0;
    public $type = '';
    public $firstpokemon = '';
    public $secondPokemon = '';
    public $thirdPokemon = '';
    public $idUser = 0;

    public function __construct() {
        parent::__construct();
    }

    public function getAllSafaryType() {
        $query = 'SELECT type FROM `pokemonsInSafary` GROUP BY `type`';
        $allSafary = $this->db->query($query);
        if ($allSafary) {
            $allSafary = $allSafary->fetchAll(PDO::FETCH_OBJ);
            return $allSafary;
        }
    }

    public function getFirstPokemonsByType() {
        $pokemonByType = $this->db->prepare('SELECT `pokemon`  FROM `pokemonsInSafary` WHERE `type` = :type AND nbPokemon = :nbPokemon');
        $pokemonByType->bindValue(':type', $this->type, PDO::PARAM_STR);
        $pokemonByType->bindValue(':nbPokemon', $this->nbPokemon, PDO::PARAM_INT);
        if ($pokemonByType->execute()) {
            $pokemonByType = $pokemonByType->fetchAll(PDO::FETCH_OBJ);
            return $pokemonByType;
        }
    }

    public function getSafaryByUser() {
        $safaryByUser = $this->db->prepare('SELECT type, firstPokemon, secondPokemon, thirdPokemon  FROM `safaryFriend` WHERE `idUser` = :idUser');
        $safaryByUser->bindValue(':idUser', $this->idUser, PDO::PARAM_STR);
        if ($safaryByUser->execute()) {
            $safaryByUser = $safaryByUser->fetch(PDO::FETCH_OBJ);
            return $safaryByUser;
        }
    }

    public function getSafaryByOtherUser() {
        $safaryByUser = $this->db->prepare('SELECT `type`, `firstPokemon`, `secondPokemon`, `thirdPokemon`  FROM `safaryFriend` INNER JOIN `users` WHERE `safaryFriend`.`idUser` = `users`.`id` AND `users`.`pseudo` = :pseudo');
        $safaryByUser->bindValue(':pseudo', $this->pseudo, PDO::PARAM_STR);
        if ($safaryByUser->execute()) {
            $safaryByUser = $safaryByUser->fetch(PDO::FETCH_OBJ);
            return $safaryByUser;
        }
    }

    public function addSafaryUser() {
        //On prépare la requête sql qui insert dans les champs selectionnés, les valeurs sont des marqueurs nominatifs
        $query = 'INSERT INTO `safaryFriend`(`type`, `firstPokemon`, `secondPokemon`, `thirdPokemon`, `idUser`) VALUES(:type, :firstPokemon, :secondPokemon, :thirdPokemon, :idUser)';
        $addSafaryUser = $this->db->prepare($query);
        $addSafaryUser->bindValue(':type', $this->type, PDO::PARAM_STR);
        $addSafaryUser->bindValue(':firstPokemon', $this->firstPokemon, PDO::PARAM_STR);
        $addSafaryUser->bindValue(':secondPokemon', $this->secondPokemon, PDO::PARAM_STR);
        $addSafaryUser->bindValue(':thirdPokemon', $this->thirdPokemon, PDO::PARAM_STR);
        $addSafaryUser->bindValue(':idUser', $this->idUser, PDO::PARAM_STR);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        return $addSafaryUser->execute();
    }

    public function updateSafary() {
        //On prépare la requête sql qui insert dans les champs selectionnés, les valeurs sont des marqueurs nominatifs
        $query = 'UPDATE safaryFriend SET type = :type, firstPokemon=:firstPokemon, secondPokemon=:secondPokemon, thirdPokemon=:thirdPokemon WHERE idUser = :idUser';
        $updateSafary = $this->db->prepare($query);
        $updateSafary->bindValue(':type', $this->type, PDO::PARAM_STR);
        $updateSafary->bindValue(':firstPokemon', $this->firstPokemon, PDO::PARAM_STR);
        $updateSafary->bindValue(':secondPokemon', $this->secondPokemon, PDO::PARAM_STR);
        $updateSafary->bindValue(':thirdPokemon', $this->thirdPokemon, PDO::PARAM_STR);
        $updateSafary->bindValue(':idUser', $this->idUser, PDO::PARAM_STR);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        return $updateSafary->execute();
    }

    public function __destruct() {

    }

}

?>