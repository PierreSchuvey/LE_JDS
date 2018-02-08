<?php

$nextPokemon = new pokemons();
$nextPokemon->id = $nextPkm;
$nextPokemon = $nextPokemon->nextPokemon();

if ($currentPokemon->id >= 151) {

} else {
    $nextPokemon = $nextPokemon->nomPkm;
}
if ($currentPokemon->id >= 151) {
    echo $firstPokemon;
} else {
    echo $nextPokemon;
}
?>


