<?php
include_once 'vues/header.php';
include_once 'vues/leftbar.php';
include_once 'models/dataBase.php';
include_once 'models/pokemons.php';
include_once 'models/versions.php';
include_once 'controllers/currentPokemon.php';
?>
<script src="/../assets/js/versionsGenerationsLocal.js"></script>
<div class="container bodyPage">
    <div class ="row">
        <div class="col-sm-offset-2 col-sm-9 col-md-offset-3 col-md-9 col-lg-offset-3 col-lg-6 tablo">
            <table class="nextPreviousTable">
                <td class="nextPreviousTable"><a href="<?= $selectedPokemon->id <= 1 ? $lastPokemon : $previousPokemon; ?>" id="previousButton" ><<</a></td>
                <td class="col-lg-2">
                <center><p>#<?= $selectedPokemon->id <= 1 ? $selectedPokemon->id + $maxId - 1 : $selectedPokemon->id - 1; ?></p></center>
                <img src="../assets/minSprite/<?= $selectedPokemon->id <= 1 ? $selectedPokemon->id + $maxId - 1 : $selectedPokemon->id - 1; ?>.png" width='80px'></td>
                <td class="hidden-xs col-lg-4"><center><p><?= $currentName; ?></p></center></td>
                <td class="col-lg-2"><center><p>#<?= $selectedPokemon->id >= $maxId ? $selectedPokemon->id - $lastPokemonMoinsUn : $selectedPokemon->id + 1; ?></p></center>
                <img src="../assets/minSprite/<?= $selectedPokemon->id >= $maxId ? $selectedPokemon->id - $lastPokemonMoinsUn : $selectedPokemon->id + 1; ?>.png" width='80px'></td>
                <td class="col-lg-2"><a href="<?= $selectedPokemon->id >= $maxId ? $firstPokemon : $nextPokemon; ?>" id="nextButton">>></a></td>
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
    <center><a href="/shasse_en_cours/<?= $selectedPokemon->nomPkm; ?>"  class="linkPagePkm">Commencer la shasse !</a></center>
    <center><small><a href="http://www.pokepedia.fr/<?= $currentName; ?>" class="linkPagePkm">Fiche Poképedia</a></small></center>
    <div class="row">
        <div class="col-lg-2">
            <p>Générations<p/>
        </div>
        <p id="numberGneration"></p>
        <div class="col-lg-5">
            <small><a href="#" nbGen="1" class="linkPagePkm">1</a></small>
            <small><a href="#" nbGen="2" class="linkPagePkm">2</a></small>
            <small><a href="#" nbGen="3" class="linkPagePkm">3</a></small>
            <small><a href="#" nbGen="4" class="linkPagePkm">4</a></small>
            <small><a href="#" nbGen="5" class="linkPagePkm">5</a></small>
            <small><a href="#" nbGen="6" class="linkPagePkm">6</a></small>
            <small><a href="#" nbGen="7" class="linkPagePkm">7</a></small>
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