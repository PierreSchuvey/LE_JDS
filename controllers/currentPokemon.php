<?php

$currentPokemon = new pokemons();
$currentPokemon->nomPkm = $_GET['pokemonName'];
$selectedPokemon = $currentPokemon->currentPokemon();
$currentName = $selectedPokemon->nomPkm;
$previousPkm = $selectedPokemon->id - 1;
$nextPkm = $selectedPokemon->id + 1;
$lastPokemon = $currentPokemon->lastPokemon();
$lastPokemon = $currentPokemon->nomPkm;
$firstPokemon = $currentPokemon->firstPokemon();
$firstPokemon = $currentPokemon->nomPkm;
$allVersion = new versions();
$allVersion = $allVersion->getAllVersions();
?>

