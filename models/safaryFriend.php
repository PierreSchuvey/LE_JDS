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

    public function __destruct() {

    }

}

?>