<?php
include_once 'vues/header.php';
include_once 'vues/leftbar.php';
include_once 'models/dataBase.php';
include_once 'models/pokemons.php';
include_once 'models/hunts.php';
include 'controllers/livingDexController.php';
if (isset($_SESSION['connected']) && isset($_SESSION['id']) && $_SESSION['connected'] == 1) {
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
    <?php
} else {
    ?>
    <div class="container  bodyPage">
        <center>Pour voir votre profil veuillez vous connectez ou vous inscrire</center>
        <div class="row">
            <div class="col-lg-12 text-center">
                <a href="/connexion" alt="connexion" id="subscribe">Connexion / Inscription</a>
            </div>
        </div>
    </div>
    <?php
}
?>
<?php include 'vues/footer.php' ?>
