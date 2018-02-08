<?php

for ($nbPkm = 1; $nbPkm <= 151; $nbPkm++) {
    $thePokemon = new pokemons();
    $thePokemon->id = $nbPkm;
    $thePokemon = $thePokemon->getOnePokemon();
    echo '<a href="' . $thePokemon->nomPkm . '"><img class="minSpritePkm" id="' . $nbPkm . '" src="assets/minSprite/' . $nbPkm . '.png"></a>';
}
?>
