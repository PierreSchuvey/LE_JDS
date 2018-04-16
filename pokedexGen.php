<?php
include_once 'vues/header.php';
include_once 'vues/leftbar.php';
include_once 'models/dataBase.php';
include_once 'models/pokemons.php';
include_once 'models/hunts.php';
include_once 'vues/lastCapture.php';
?>
<div class="container bodyPage">
    <div class="col-xs-offset-2">
        <h2 class="mainTitle">Généraion <?= $_GET['nbGen'] ?></h2>
    </div>
    <div class="row">
        <div class="col-sm-offset-1 col-sm-10 col-md-offset-1 col-md-10 col-lg-offset-1 col-lg-10 pokedexCase">
            <?php
            include 'controllers/showPokemonOnPokedex.php';
            ?>
        </div>
    </div>
</div>
<?php include 'vues/footer.php' ?>
