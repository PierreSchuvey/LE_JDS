<?php
include_once 'vues/header.php';
include_once 'vues/leftbar.php';
include_once 'models/dataBase.php';
include_once 'models/pokemons.php';
include_once 'models/versions.php';
include_once 'models/methodes.php';
include_once 'models/hunts.php';
include_once 'controllers/huntController.php';
include_once 'vues/lastCapture.php';
?>

<script src="/../assets/js/methodShasse.js"></script>
<?php
if (isset($_SESSION['connected']) && isset($_SESSION['id']) && $_SESSION['connected'] != 1) {
    ?><center><p  class="errorsLoginSub">ATTENTION ! Vous n'êtes pas connecté votre capture ne serra pas enregistrée ! <a href="/connexion">Connexion/Inscription</a></p></center><?php
    include_once 'controllers/huntController.php';
}
?>
<div class="container bodyPage">
    <div class="col-lg-12">
        <center><h1 class="mainTitle">Target : <?= $currentPokemon->nomPkm ?> !</h1></center>
    </div>
    <div class="col-lg-offset-5">
        <div class="pokemonOnTarget">
            <span class="normal">
                <img class="targetSprite" id="targetPkmInProgress" src="/assets/classicGif/<?= $currentPokemon->nomPkm ?>.png">
                <img class="targetSprite" id="targetPkmShinyInProgress" src="/assets/shinyGif/<?= $currentPokemon->nomPkm ?>.png"/>
            </span>
        </div>
    </div>
    <?php
    include_once 'vues/huntHub.php';
    ?>
</div>
<script src="/assets/js/targetPkm.js"></script>
<script src="/assets/js/huntInProgress.js"></script>
<?php include_once 'vues/footer.php'; ?>
