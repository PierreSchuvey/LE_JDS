<?php
include_once 'vues/header.php';
include_once 'vues/leftbar.php';
include_once 'models/dataBase.php';
include_once 'models/pokemons.php';
include_once 'controllers/currentPokemon.php';
?>
<div class="container">
    <div class="row">
        <div class="col-lg-offset-4 col-lg-6">
            <h1 class="mainTitle">Target : <?= $currentPokemon->nomPkm ?> !</h1>
        </div>
    </div>
    <div class="col-lg-offset-5">
        <div class="pokemonOnTarget">
            <span class="normal">
                <img class="targetSprite" id="targetPkmInProgress" src="/assets/classicGif/<?= $currentPokemon->nomPkm ?>.png">
                <img class="targetSprite" id="targetPkmShinyInProgress" src="/assets/shinyGif/<?= $currentPokemon->nomPkm ?>.png"/>
            </span>
        </div>
    </div>
    <form action="#" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="form-group col-lg-offset-1 col-lg-3">
                <p><label>Version : </label></p>
                <select>
                    <option>Ultra Soleil</option>
                </select>
            </div>
            <div class="form-group col-lg-offset-1 col-lg-3">
                <p><label>Methode : </label></p>
                <select >
                    <option>Horde</option>
                </select>
            </div>
            <div class="form-group col-lg-offset-1 col-lg-3">
                <label>Charme Chroma : </label>
                <input type="checkbox">
            </div>
        </div>
    </form>
    <div class="row">
        <p id="counter">0</p>
    </div>
</div>
<script src="/assets/js/targetPkm.js"></script>
<script src="/assets/js/huntInProgress.js"></script>
<?php include_once 'vues/footer.php'; ?>
