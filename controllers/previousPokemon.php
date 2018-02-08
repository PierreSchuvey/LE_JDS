<?php

$previousPokemon = new pokemons();
$previousPokemon->id = $previousPkm;
$previousPokemon = $previousPokemon->previousPokemon();
if ($currentPokemon->id <= 1) {

} else {
    $previousPokemon = $previousPokemon->nomPkm;
}
if ($currentPokemon->id <= 1) {
    echo $lastPokemon;
} else {
    echo $previousPokemon;
}
?>

