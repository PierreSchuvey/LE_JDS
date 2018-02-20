<?php

$controlHunts = new hunts();
$controlHunts->idUser = $_SESSION['id'];
$lastCapture = $controlHunts->lastCapture();
?>