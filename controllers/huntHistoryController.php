<?php

if (!empty($_SESSION['id'])) {
    $controlHunts = new hunts();
    $controlHunts->idUser = $_SESSION['id'];
//par défault la première page
    $page = 1;
//on limit l'affichage à 5 patients
    $limit = 7;
    if (!empty($_GET['page'])) {
        $page = $_GET['page'];
    }
    $start = ($page - 1) * $limit;
    $finishedHuntList = $controlHunts->getFinishedHuntListPagination($start);

    $finishedHuntCount = $controlHunts->countFinishedhunt();
    $maxPagination = ceil($finishedHuntCount->numberOfFinishedHunt / $limit);
}
?>

