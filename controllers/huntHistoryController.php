<?php

if (!empty($_SESSION['id'])) {
    $controlHunts = new hunts();
    $controlHunts->idUser = $_SESSION['id'];
    $finishedHunt = $controlHunts->getFinishedHunt();
}
?>

