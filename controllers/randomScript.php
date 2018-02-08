<?php

include '../models/dataBase.php';
include '../models/pokemons.php';
$randomNumber = rand(1, 151);
$thePokemon = new pokemons();
$thePokemon->id = $randomNumber;
$thePokemon = $thePokemon->getOnePokemon();
echo $thePokemon->nomPkm;
?>

