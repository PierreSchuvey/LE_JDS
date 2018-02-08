<?php

if ($currentPokemon->id >= 151) {
    echo $currentPokemon->id - 150;
} else {
    echo $currentPokemon->id + 1;
}
?>

