<?php
include_once 'vues/header.php';
include_once 'vues/leftbar.php';
include_once 'models/dataBase.php';
include_once 'models/pokemons.php';
include_once 'models/versions.php';
include_once 'controllers/currentPokemon.php';
?>
<script src="/../assets/js/versionsGenerationsLocal.js"></script>
<div class="container">
    <div class ="row">
        <div class="col-xs-9 col-sm-offset-2 col-sm-9 col-md-offset-3 col-md-9 col-lg-offset-3 col-lg-6 tablo">
            <table class="nextPreviousTable">
                <td class="nextPreviousTable" class="col-lg-3"><a href="<?php include 'controllers/previousPokemon.php'; ?>" id="previousButton" ><<</a></td>
                <td class="col-lg-2">
                <center><p>#<?php include 'controllers/previousSpriteAndNumber.php'; ?></p></center>
                <img src="../assets/minSprite/<?php include 'controllers/previousSpriteAndNumber.php'; ?>.png" width='80px'></td>
                <td class="hidden-xs col-lg-4"><center><p><?= $currentName; ?></p></center></td>
                <td class="col-lg-2"><center><p>#<?php include 'controllers/nextSpriteAndNumber.php'; ?></p></center>
                <img src="../assets/minSprite/<?php include 'controllers/nextSpriteAndNumber.php'; ?>.png" width='80px'></td>
                <td class="col-lg-2"><a href="<?php include 'controllers/nextPokemon.php'; ?>" id="nextButton">>></a></td>
            </table>
        </div>
    </div>
    <div class ="row">
        <div class="hidden-sm hidden-md hidden-lg">
            <div class="col-xs-12   col-sm-offset-5 col-md-offset-5 col-lg-offset-6">
                <p id="currentPkm"><?= $selectedPokemon->nomPkm; ?></p>
            </div>
        </div>
    </div>
    <div class ="row">
        <div class="col-lg-12">
            <div class="col-lg-12">
                <img src="../assets/splashart/<?= $selectedPokemon->id ?>.png" id="splashArt">
            </div>
        </div>
    </div>
    <div class ="row">
        <div class="col-lg-12">
            <div class="col-lg-12">
                <a href="/shasse_en_cours/<?= $selectedPokemon->nomPkm; ?>" id="beginShasse">Commencer la shasse !</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-offset-5">
            <small><a href="http://www.pokepedia.fr/<?= $currentName; ?>">Fiche Poképedia</a></small>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            <p>Générations<p/>
        </div>
        <p id="numberGneration"></p>
        <div class="col-lg-5">
            <small><a href="#" id="Gen1">1</a></small>
            <small><a href="#" id="Gen2">2</a></small>
            <small><a href="#" id="Gen3">3</a></small>
            <small><a href="#" id="Gen4">4</a></small>
            <small><a href="#" id="Gen5">5</a></small>
            <small><a href="#" id="Gen6">6</a></small>
            <small><a href="#" id="Gen7">7</a></small>
        </div>
    </div>
    <div>
        <table id="tableLocal" border="1">
            <div>
                <thead>
                    <tr>
                        <td colspan=3 id="headTableLocal">Localisation</td>
                    </tr>
                </thead>
            </div>
            <tbody id="bodyTable">
            </tbody>
        </table>
    </div>
</div>
<?php include 'vues/footer.php'
?>
