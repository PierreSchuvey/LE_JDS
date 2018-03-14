<?php

$allPokemon = new pokemons();
if (isset($_SESSION['id'])) {
    $allPokemon->idUser = $_SESSION['id'];
    $allPokemon->idGen = $_GET['idGen'];
    $catchedPokemon = $allPokemon->getCatchedPokemonById();
}
?>

