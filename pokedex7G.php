
<?php include 'header.php' ?>
<?php include 'leftbar.php' ?>
<div class="container bodyPage">
    <div class="row">
        <h2 class="mainTitle">7éme Génération</h2>
        <div class="col-lg-5 pokedexCase">
            <?php
            for ($i = 722; $i <= 802; $i++) {
                echo '<img class="minSpritePkm" id="minSpritePkm" src="assets/minSprite/' . $i . '.png">';
            }
            ?>
        </div>
        <div class="col-lg-offset-6">
            <p class="pokedexName">Bulbizarre #001</p>
            <img id="pokedexSplash" src="assets/splashart/001.png" />
            <a href="http://www.pokepedia.fr/Bulbizarre" id="linkPokepedia">Fiche Pokepedia</a>
        </div>
        <h2>Formes d'Alola</h2>
        <div class="col-lg-5 pokedexCase">
            <?php
            for ($i = 803; $i <= 820; $i++) {
                echo '<img id="minSpritePkm" src="assets/minSprite/' . $i . '.png">';
            }
            ?>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>
