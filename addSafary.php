<?php
include_once 'vues/header.php';
//include_once 'vues/leftbar.php';
include_once 'models/dataBase.php';
include_once 'models/safaryFriend.php';
include_once 'controllers/addSafaryController.php';
?>
<script src="/../assets/js/parkPokemonByType.js"></script>
<div class="row">
    <div class="col-xs-offset-1 col-lg-offset-4 col-lg-4">
        <center><h1>Page d'ajout du Safari ami !</h1></center>
    </div>
</div>
<form action="/inscription" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-lg-offset-5 col-lg-2  topLog">
            <center><label>Type du parc : </label></center>
        </div>
        <div class="form-group col-lg-offset-5 col-lg-2">
            <select name="pseudo" id="selectedType">
                <option>Sélectionnez le type de votre safari</option>
                <?php
                foreach ($safaryType as $safaryType) {
                    ?>
                    <option><?= $safaryType->type; ?></option>
                    <?php
                }
                ?>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-offset-3 col-lg-2">
            <center><label>1er Pokemon :</label></center>
            <center><select name="pseudo" id="firstPokemon">
                    <option>Type non sélectionné</option>
                </select></center>
            <center><img id="firstPokemonSprite" src="/assets/spriteSafari/interrogation.png" alt="Smiley face"></center>
        </div>
        <div class="form-group col-lg-2">
            <center><label>2éme Pokemon :</label></center>
            <center><select name="pseudo" id="secondPokemon">
                    <option>Type non sélectionné</option>
                </select></center>
            <center><img id="secondPokemonSprite" src="/assets/spriteSafari/interrogation.png" alt="Smiley face"></center>
        </div>
        <div class="form-group col-lg-2">
            <center><label>3éme Pokemon :</label></center>
            <center><select name="pseudo" id="thirdPokemon">
                    <option>Type non sélectionné</option>
                </select></center>
            <center><img id="thirdPokemonSprite" src="/assets/spriteSafari/interrogation.png" alt="Smiley face"></center>
        </div>
    </div>
    <div class="">
        <center><input type="submit" value="Valider le choix du parc Safari"></center>
    </div>
</form>
<?php
include 'vues/footer.php';
?>

