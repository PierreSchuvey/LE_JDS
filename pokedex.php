<?php include 'header.php' ?>
<?php include 'leftbar.php' ?>
<div class="container bodyPage">
    <div class="row">
        <span class="col-lg-5 pokedexCase">
            <h2 class="mainTitle">1ére Génération</h2>
            <?php
            for ($i = 1; $i <= 151; $i++) {
                echo '<img id="minSpritePkm" class="minSpritePkm" src="assets/minSprite/' . $i . '.png">';
            }
            ?>
        </span>
        <span class="col-lg-5 pokedexCase">
            <h2 class="mainTitle">2éme Génération</h2>
            <?php
            for ($i = 152; $i <= 251; $i++) {
                echo '<img id="minSpritePkm" class="minSpritePkm" src="assets/minSprite/' . $i . '.png">';
            }
            ?>
        </span>
    </div>
    <div class="row">
        <span class="col-lg-5 pokedexCase">
            <h2 class="mainTitle">3éme Génération</h2>
            <?php
            for ($i = 253; $i <= 386; $i++) {
                echo '<img id="minSpritePkm" class="minSpritePkm" src="assets/minSprite/' . $i . '.png">';
            }
            ?>
        </span>
        <span class="col-lg-5 pokedexCase">
            <h2 class="mainTitle">4éme Génération</h2>
            <?php
            for ($i = 253; $i <= 386; $i++) {
                echo '<img id="minSpritePkm" class="minSpritePkm" src="assets/minSprite/' . $i . '.png">';
            }
            ?>
        </span>
    </div>
    <div class="row">
        <span class="col-lg-5 pokedexCase">
            <h2 class="mainTitle">5éme Génération</h2>
            <?php
            for ($i = 494; $i <= 649; $i++) {
                echo '<img id="minSpritePkm" class="minSpritePkm" src="assets/minSprite/' . $i . '.png">';
            }
            ?>
        </span>
        <span class="col-lg-5 pokedexCase">
            <h2 class="mainTitle">6éme Génération</h2>
            <?php
            for ($i = 650; $i <= 721; $i++) {
                echo '<img id="minSpritePkm" class="minSpritePkm" src="assets/minSprite/' . $i . '.png">';
            }
            ?>
        </span>
    </div>
    <div class="row">
        <span class="col-lg-5 pokedexCase">
            <h2 class="mainTitle">7éme Génération</h2>
            <?php
            for ($i = 722; $i <= 802; $i++) {
                echo '<img id="minSpritePkm" class="minSpritePkm" src="assets/minSprite/' . $i . '.png">';
            }
            ?>
        </span>
        <span class="col-lg-5 pokedexCase">
            <h2 class="mainTitle">Formes d'Alola</h2>
            <?php
            for ($i = 803; $i <= 820; $i++) {
                echo '<img id="minSpritePkm" class="minSpritePkm" src="assets/minSprite/' . $i . '.png">';
            }
            ?>
        </span>
    </div>
</div>
</div>
<?php include 'footer.php' ?>
