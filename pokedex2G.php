<?php include 'header.php' ?>
<?php include 'leftbar.php' ?>
<div class="container bodyPage">
    <h2 class="mainTitle">2éme Génération</h2>
    <div class="row">
        <div class="col-lg-5 pokedexCase">
            <?php
            for ($i = 152; $i <= 251; $i++) {
                echo '<img class="minSpritePkm" id="minSpritePkm" src="assets/minSprite/' . $i . '.png">';
            }
            ?>
        </div>
        <div class="row">
            <div class="col-lg-offset-6">
                <p class="pokedexName">Bulbizarre #001</p>
                <img id="pokedexSplash" src="assets/splashart/001.png" />
                <a href="http://www.pokepedia.fr/Bulbizarre" id="linkPokepedia">Fiche Pokepedia</a>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>
