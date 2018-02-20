<?php
include_once 'controllers/lastCaptureController.php';
if (!empty($lastCapture)) {
    ?>
    <div class = "hidden-xs hidden-sm" id = "lastCaptureHub">
        <img id = "lastCapture" src = "/assets/classicGif/<?= isset($lastCapture->pokemon) ? $lastCapture->pokemon : ''; ?>.png"/>
        <img id = "lastCaptureS" src = "/assets/shinyGif/<?= isset($lastCapture->pokemon) ? $lastCapture->pokemon : ''; ?>.png"/>
        <p class = "lastCaptureInfos lastCaptureName"><?= isset($lastCapture->pokemon) ? $lastCapture->pokemon : ''; ?></p>
        <p class = "lastCaptureInfos">Dernière capture!</p>
        <p class = "lastCaptureInfos">Version : <?= isset($lastCapture->version) ? $lastCapture->version : ''; ?></p>
        <p class = "lastCaptureInfos">Méthode : <?= isset($lastCapture->method) ? $lastCapture->method : ''; ?></p>
        <p class = "lastCaptureInfos">Nombres de rencontres : <?= isset($lastCapture->nbEncounter) ? $lastCapture->nbEncounter : ''; ?></p>
    </div>
    <?php
}

