<?php

$currentPokemon = new pokemons();
$currentPokemon->nomPkm = $_GET['pokemonName'];
$selectedPokemon = $currentPokemon->currentPokemon();
$allVersion = new versions();
$allVersion = $allVersion->getAllVersions();

if (!empty($_SESSION['id']) && $_SESSION['id'] != 0) {
    $controlHunts = new hunts();
    $currentPokemon->idPokemon = $selectedPokemon->id;
    $controlHunts->idUser = $_SESSION['id'];
    if (isset($_GET['pokemonName'])) {
        $controlHunts->idPokemon = $selectedPokemon->id;
    }
    $existingHunt = $controlHunts->getExistHunt();
    if ($existingHunt && isset($_GET['pokemonName'])) {

    } else {
        $addNewHunt = $controlHunts->addNewHunt();
    }

    if (isset($_POST['saveHunt'])) {
        $controlHunts->idMethod = $_POST['methodSelected'];
        $controlHunts->idVersion = $_POST['versionSelected'];
        $controlHunts->nbEncounter = $_POST['encounterCount'];
        $savingHunt = $controlHunts->savingHunt();
    }

    if (isset($_POST['validHunt'])) {
        $controlHunts->idMethod = $_POST['methodSelected'];
        $controlHunts->idVersion = $_POST['versionSelected'];
        $controlHunts->nbEncounter = $_POST ['encounterCount'];
        $savingHunt = $controlHunts->validHunt();
    }
}
?>
