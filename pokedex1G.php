<?php include 'header.php' ?>
<?php include 'leftbar.php' ?>
<div class="container bodyPage">
    <div class="col-xs-offset-2">
        <h2 class="mainTitle">1ére Génération</h2>
    </div>
    <div class="row">
        <div class="col-sm-offset-1 col-sm-10 col-md-offset-1 col-md-10 col-lg-offset-1 col-lg-10 pokedexCase">
            <?php
            for ($i = 1; $i <= 151; $i++) {
                echo '<img class="minSpritePkm" id="' . $i . '" src="assets/minSprite/' . $i . '.png">';
            }
            ?>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>
