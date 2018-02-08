<?php

$currentPokemon = new pokemons();
$currentPokemon->nomPkm = $_GET['pokemonName'];
$currentPokemon = $currentPokemon->currentPokemon();
$currentName = $currentPokemon->nomPkm;
$previousPkm = $currentPokemon->id - 1;
$nextPkm = $currentPokemon->id + 1;
$lastPokemon = new pokemons();
$lastPokemon = $lastPokemon->lastPokemon();
$lastPokemon = $lastPokemon->nomPkm;
$firstPokemon = new pokemons();
$firstPokemon = $firstPokemon->firstPokemon();
$firstPokemon = $firstPokemon->nomPkm;
?>

