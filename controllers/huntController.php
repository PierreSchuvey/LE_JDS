<?php

$currentPokemon = new pokemons();
$currentPokemon->nomPkm = $_GET['pokemonName'];
$selectedPokemon = $currentPokemon->currentPokemon();
$allVersion = new versions();
$allVersion = $allVersion->getAllVersions();

if (!empty($_SESSION['id']) && $_SESSION['id'] != 0) {
    $controlHunts = new hunts();
    $controlHunts->idUser = $_SESSION['id'];
    if (isset($_GET['pokemonName'])) {
        $controlHunts->pokemon = $_GET['pokemonName'];
    }
    $existingHunt = $controlHunts->getExistHunt();
    if ($existingHunt && isset($_GET['pokemonName'])) {

    } else {
        $addNewHunt = $controlHunts->addNewHunt();
    }

    if (isset($_POST['saveHunt'])) {
        $controlHunts->method = $_POST['methodSelected'];
        $controlHunts->version = $_POST['versionSelected'];
        $controlHunts->nbEncounter = $_POST ['encounterCount'];
        $savingHunt = $controlHunts->savingHunt();
    }

    if (isset($_POST['validHunt'])) {
        $controlHunts->method = $_POST['methodSelected'];
        $controlHunts->version = $_POST['versionSelected'];
        $controlHunts->nbEncounter = $_POST ['encounterCount'];
        $savingHunt = $controlHunts->validHunt();
    }
}
?>
