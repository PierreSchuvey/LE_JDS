<?php
include_once 'controllers/lastCaptureController.php';
if (!empty($lastCapture)) {
    ?>
    <div class = "hidden-xs hidden-sm" id = "lastCaptureHub">
        <img id = "lastCapture" src = "/assets/classicGif/<?= isset($lastCapture->nomPkm) ? $lastCapture->nomPkm : ''; ?>.png"/>
        <img id = "lastCaptureS" src = "/assets/shinyGif/<?= isset($lastCapture->nomPkm) ? $lastCapture->nomPkm : ''; ?>.png"/>
        <p class = "lastCaptureInfos lastCaptureName"><?= isset($lastCapture->nomPkm) ? $lastCapture->nomPkm : ''; ?></p>
        <p class = "lastCaptureInfos">Dernière capture!</p>
        <p class = "lastCaptureInfos">Version : <?= isset($lastCapture->vesions) ? $lastCapture->vesions : ''; ?></p>
        <p class = "lastCaptureInfos">Méthode : <?= isset($lastCapture->methode) ? $lastCapture->methode : ''; ?></p>
        <p class = "lastCaptureInfos">Nombres de rencontres : <?= isset($lastCapture->nbEncouter) ? $lastCapture->nbEncouter : ''; ?></p>
    </div>
    <?php
}

