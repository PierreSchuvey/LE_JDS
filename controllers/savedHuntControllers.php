<?php

if (isset($_GET['idDeleteHunt'])) {
    $deletePokemon = new hunts();
    $deletePokemon->id = $_GET['idDeleteHunt'];
    $deletePokemon->deleteSavedHunt();
} else {
    echo 'ma bite';
}


if (!empty($_SESSION['id'])) {
    $controlHunts = new hunts();
    $controlHunts->idUser = $_SESSION['id'];
//par défault la première page
    $page = 1;
//on limit l'affichage à 5 patients
    $limit = 11;
    if (!empty($_GET['page'])) {
        $page = $_GET['page'];
    }
    $start = ($page - 1) * $limit;
    $controlHunts->idGen = $_GET['Gen'];
    $listSavedHunt = $controlHunts->getSavedHuntListPagination($start);
    $controlHunts->idGen = $_GET['Gen'];
    $huntsCount = $controlHunts->countSavedhunt();
    $maxPagination = ceil($huntsCount->numberOfSavedHunt / $limit);
}
?>

