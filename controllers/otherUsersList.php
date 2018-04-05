<?php

if (!empty($_SESSION['id'])) {
    $otherUsersList = new users();
    $otherUsersList->id = $_SESSION['id'];
//par défault la première page
    $page = 1;
//on limit l'affichage à 5 patients
    $limit = 12;
    if (!empty($_GET['page'])) {
        $page = $_GET['page'];
    }
    $start = ($page - 1) * $limit;
    $listShasseurs = $otherUsersList->getPatientListPagination($start);

    $usersCount = $otherUsersList->countUsers();
    $maxPagination = ceil($usersCount->numberOfUsers / $limit);
}
?>