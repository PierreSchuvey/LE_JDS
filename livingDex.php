<?php
include_once 'vues/header.php';
include_once 'vues/leftbar.php';
include_once 'models/dataBase.php';
include_once 'models/pokemons.php';
include_once 'models/hunts.php';
include 'controllers/livingDexController.php';
include_once 'vues/lastCapture.php';
?>
<div class="container bodyPage">
    <div class="row">
        <span class="col-lg-12 pokedexCase">
            <h2 class="mainTitle">1ére Génération</h2>
            <div class="box">
                <?php
                foreach ($catchedPokemon as $catchedPokemon) {
                    ?>
                    <div class = "boxPkm">
                        <div class = "caseLivingDex">
                            <div class = "boxNumber"># <?= $catchedPokemon->id ?></div>
                            <?php
                            if ($catchedPokemon->catchStatement == 1 && $catchedPokemon->idUser == $_SESSION['id']) {
                                ?>
                                <div class="boxSpriteCaptured">
                                    <img src="/assets/minSprite/<?= $catchedPokemon->id ?>.png">
                                    <img src="/assets/img/check.png">
                                </div>
                                <?php
                            } else {
                                ?>
                                <div class="boxSprite">
                                    <img src="/assets/minSprite/<?= $catchedPokemon->id ?>.png">
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </span>
    </div>
</div>
<?php include 'vues/footer.php' ?>
