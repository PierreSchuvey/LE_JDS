<?php

if (isset($_POST['allPokemonsByType'])) {
    include_once '../models/dataBase.php';
    include_once '../models/safaryFriend.php';
    $allPokemonByType = array();
    $allAboutSafary = new safaryFriend();
    $allAboutSafary->type = $_POST['allPokemonsByType'];
    $allAboutSafary->nbPokemon = $_POST['nbPkmFirst'];
    $allPokemonFirstByType = $allAboutSafary->getFirstPokemonsByType();
    $allAboutSafary->nbPokemon = $_POST['nbPkmSecond'];
    $allPokemonSecondByType = $allAboutSafary->getFirstPokemonsByType();
    $allAboutSafary->nbPokemon = $_POST['nbPkmThird'];
    $allPokemonThirdByType = $allAboutSafary->getFirstPokemonsByType();
    $allPokemonByType[] = $allPokemonFirstByType;
    $allPokemonByType[] = $allPokemonSecondByType;
    $allPokemonByType[] = $allPokemonThirdByType;
    echo json_encode($allPokemonByType);
} else {
    $allAboutSafary = new safaryFriend();
    $safaryType = $allAboutSafary->getAllSafaryType();
}
?>

