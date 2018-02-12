<?php

if ($selectedPokemon->id >= 151) {
    echo $selectedPokemon->id - 150;
} else {
    echo $selectedPokemon->id + 1;
}
?>

