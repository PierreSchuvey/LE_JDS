<?php
include_once 'vues/header.php';
include_once 'vues/leftbar.php';
include_once 'models/dataBase.php';
include_once 'models/pokemons.php';
?>
<div class="container bodyPage">
    <div class="row">
        <span class="col-lg-12 pokedexCase">
            <h2 class="mainTitle">1ére Génération</h2>
            <?php
            include 'controllers/showPokemonOnPokedex.php';
            ?>
        </span>
    </div>
</div>
</div>
<?php include 'vues/footer.php' ?>
