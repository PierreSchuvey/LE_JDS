<?php
include_once 'vues/header.php';
//include_once 'vues/leftbar.php';
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
                <img class="targetSprite" id="targetPkm" src="assets/classicGif/<?= $currentPokemon->nomPkm ?>.png">
                <img class="targetSprite" id="targetPkmShiny" src="assets/shinyGif/<?= $currentPokemon->nomPkm ?>.png"/>
            </span>
        </div>
    </div>
</div>
<script src="assets/js/targetPkm.js"></script>
<?php include_once 'vues/footer.php'; ?>
