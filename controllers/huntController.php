<?php

// Instanciation de l'objet du modèle pokemons
$currentPokemon = new pokemons();
//Attribution de la valeur de l'attribut nomPkm
$currentPokemon->nomPkm = $_GET['pokemonName'];
$selectedPokemon = $currentPokemon->currentPokemon();
$allVersion = new versions();
$allVersion = $allVersion->getAllVersions();
//On vérifier qu'un utilisateur soit bien connecté
if (!empty($_SESSION['id']) && $_SESSION['id'] != 0) {
    $controlHunts = new hunts();
    $currentPokemon->idPokemon = $selectedPokemon->id;
    $controlHunts->idUser = $_SESSION['id'];
    if (isset($_GET['pokemonName'])) {
        $controlHunts->idPokemon = $selectedPokemon->id;
    }
    //Appéle de la mèthode getExistHunt()
    $existingHunt = $controlHunts->getExistHunt();
    //érification de l'éxistance de la shasse
    if ($existingHunt && isset($_GET['pokemonName'])) {

    } else {
        //Appéle de la mèthode addNewhunt()
        $addNewHunt = $controlHunts->addNewHunt();
    }
//Vérification que l'index savedHunt est bien instancié
    if (isset($_POST['saveHunt'])) {
        $controlHunts->idMethod = $_POST['methodSelected'];
        $controlHunts->idVersion = $_POST['versionSelected'];
        $controlHunts->nbEncounter = $_POST['encounterCount'];
        //Appéle de la mèthode savingHunt
        $savingHunt = $controlHunts->savingHunt();
    }

    if (isset($_POST['validHunt'])) {
        $controlHunts->idMethod = $_POST['methodSelected'];
        $controlHunts->idVersion = $_POST['versionSelected'];
        $controlHunts->nbEncounter = $_POST ['encounterCount'];
        //Appel de la mèthode validHunt()
        $savingHunt = $controlHunts->validHunt();
    }
}
?>
