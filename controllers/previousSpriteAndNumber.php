<?php

if ($selectedPokemon->id <= 1) {
    echo $selectedPokemon->id + 150;
} else {
    echo $selectedPokemon->id - 1;
}
?>

