<?php

$previousPokemon = new pokemons();
$previousPokemon->id = $previousPkm;
$previousPokemon = $previousPokemon->previousPokemon();
if ($selectedPokemon->id <= 1) {

} else {
    $previousPokemon = $previousPokemon->nomPkm;
}
if ($selectedPokemon->id <= 1) {
    echo $lastPokemon;
} else {
    echo $previousPokemon;
}
?>

