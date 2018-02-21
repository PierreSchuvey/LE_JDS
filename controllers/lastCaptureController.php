<?php

if (!empty($_SESSION['id'])) {
    $controlHunts = new hunts();
    $controlHunts->idUser = $_SESSION['id'];
    $lastCapture = $controlHunts->lastCapture();
}
?>