<?php

if ($currentPokemon->id <= 1) {
    echo $currentPokemon->id + 150;
} else {
    echo $currentPokemon->id - 1;
}
?>

