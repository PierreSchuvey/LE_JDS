<?php

$allPokemon = new pokemons();
$allPokemon->idUser = $_SESSION['id'];
$catchedPokemon = $allPokemon->getCatchedPokemonById();
?>

