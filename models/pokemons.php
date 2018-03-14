<?php

class pokemons extends dataBase {

    public $id = 0;
    public $nomPkm = '';
    public $idGen = 0;

    public function __construct() {
        parent::__construct();
    }

    public function getAllPokemon() {
        $query = 'SELECT `id`, `nomPkm` FROM `pokemon`';
        $allPokemon = $this->db->query($query);
        if (is_object($allPokemon)) {
            $allPokemon = $allPokemon->fetchAll(PDO::FETCH_ASSOC);
        }
        return $allPokemon;
    }

    public function getCatchedPokemonById() {
        $getCatchedPokemonById = $this->db->prepare('SELECT pokemon.id AS id, hunts.catchStatement AS catchStatement, hunts.idUser AS idUser FROM `pokemon` LEFT JOIN `hunts` ON pokemon.id = hunts.idPokemon WHERE pokemon.idGen = :idGen ORDER BY pokemon.id ASC');
        $getCatchedPokemonById->bindValue(':idGen', $this->idGen, PDO::PARAM_INT);
        $getCatchedPokemonById->execute();
        $getCatchedPokemonById = $getCatchedPokemonById->fetchAll(PDO::FETCH_OBJ);
        return $getCatchedPokemonById;
    }

    public function getOnePokemon() {
        $thePokemon = $this->db->prepare('SELECT `nomPkm` FROM `pokemon` WHERE `id` = :id');
        $thePokemon->bindValue(':id', $this->id, PDO::PARAM_STR);
        $thePokemon->execute();
        $thepokemonName = $thePokemon->fetch(PDO::FETCH_OBJ);
        return $thepokemonName;
    }

    public function currentPokemon() {
        $currentPokemon = $this->db->prepare('SELECT id, nomPkm FROM pokemon WHERE nomPkm = :nomPkm');
        $currentPokemon->bindValue(':nomPkm', $this->nomPkm, PDO::PARAM_STR);
        $currentPokemon->execute();
        $currentPokemon = $currentPokemon->fetch(PDO::FETCH_OBJ);
        return $currentPokemon;
    }

    public function previousPokemon() {
        $previousPokemon = $this->db->prepare('SELECT id, nomPkm FROM `pokemon` WHERE `id` = :id');
        $previousPokemon->bindValue(':id', $this->id, PDO::PARAM_STR);
        $previousPokemon->execute();
        $previousPokemon = $previousPokemon->fetch(PDO::FETCH_OBJ);
        return $previousPokemon;
    }

    public function nextPokemon() {
        $nextPokemon = $this->db->prepare('SELECT id, nomPkm FROM `pokemon` WHERE `id` = :id');
        $nextPokemon->bindValue(':id', $this->id, PDO::PARAM_STR);
        $nextPokemon->execute();
        $nextPokemon = $nextPokemon->fetch(PDO::FETCH_OBJ);
        return $nextPokemon;
    }

    public function firstPokemon() {
        $firstPokemon = $this->db->prepare('SELECT id, nomPkm FROM `pokemon` WHERE `id` = 1');
        $firstPokemon->bindValue(':id', $this->id, PDO::PARAM_STR);
        $firstPokemon->execute();
        $firstPokemon = $firstPokemon->fetch(PDO::FETCH_OBJ);
        return $firstPokemon;
    }

    public function firstPokemonByGen() {
        $query = 'SELECT `id`, `nomPkm` FROM `pokemon` WHERE `id` = (SELECT MIN(`id`) FROM `pokemon` WHERE `idGen` = :idGen)';
        $lastpokemonByGen = $this->db->prepare($query);
        $lastpokemonByGen->bindValue(':idGen', $this->idGen, PDO::PARAM_INT);
        $lastpokemonByGen->execute();
        $lastpokemonByGen = $lastpokemonByGen->fetch(PDO::FETCH_ASSOC);
        return $lastpokemonByGen;
    }

    public function lastPokemon() {
        $lastPokemon = $this->db->prepare('SELECT id, nomPkm FROM `pokemon` WHERE `id` = (SELECT MAX(`id`) FROM `pokemon`)');
        $lastPokemon->execute();
        $lastPokemon = $lastPokemon->fetch(PDO::FETCH_OBJ);
        return $lastPokemon;
    }

    public function lastPokemonByGen() {
        $query = 'SELECT `id`, `nomPkm` FROM `pokemon` WHERE `id` = (SELECT MAX(`id`) FROM `pokemon` WHERE `idGen` = :idGen)';
        $lastpokemonByGen = $this->db->prepare($query);
        $lastpokemonByGen->bindValue(':idGen', $this->idGen, PDO::PARAM_INT);
        $lastpokemonByGen->execute();
        $lastpokemonByGen = $lastpokemonByGen->fetch(PDO::FETCH_ASSOC);
        return $lastpokemonByGen;
    }

    public function __destruct() {

    }

}
