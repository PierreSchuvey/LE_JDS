<?php

$controlHunts = new hunts();

$controlHunts->idUser = $_SESSION['id'];
$saveHunts = $controlHunts->getSavedHunt();
?>

