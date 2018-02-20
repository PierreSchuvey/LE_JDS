<?php
include_once 'vues/header.php';
include_once 'vues/leftbar.php';
include_once 'models/dataBase.php';
include_once 'models/safaryFriend.php';
include_once 'controllers/addSafaryController.php';
?>
<script src="/../assets/js/parkPokemonByType.js"></script>
<?php
if (isset($error['ValidAddSafary'])) {
    ?>
    <p id="errorAndValidAddSafary"><?= $error['ValidAddSafary'] ?></p><?php
}
?>
<div class="row">
    <div class="col-xs-offset-1 col-lg-offset-4 col-lg-4">
        <center><h1>Page d'ajout du Safari ami !</h1></center>
    </div>
</div>
<div class = "container bodyPage">
    <form action="#" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="topLog">
                <center><label>Type du parc : </label></center>
            </div>
            <div class="form-group">
                <select name="type" id="selectedType">
                    <option>Sélectionnez le type</option>
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
            <div class="form-group">
                <center><label>1er Pokemon :</label></center>
                <center><select name="firstPokemon" id="firstPokemon">
                        <option>Type non sélectionné</option>
                    </select></center>
                <center><img id="firstPokemonSprite" class="spritePokemonSafary" src="/assets/spriteSafari/interrogation.png" alt="Smiley face"></center>
            </div>
            <div class="form-grou">
                <center><label>2éme Pokemon :</label></center>
                <center><select name="secondPokemon" id="secondPokemon">
                        <option>Type non sélectionné</option>
                    </select></center>
                <center><img id="secondPokemonSprite" class="spritePokemonSafary" src="/assets/spriteSafari/interrogation.png" alt="Smiley face"></center>
            </div>
            <div class="form-group">
                <center><label>3éme Pokemon :</label></center>
                <center><select name="thirdPokemon" id="thirdPokemon">
                        <option>Type non sélectionné</option>
                    </select></center>
                <center><img id="thirdPokemonSprite" class="spritePokemonSafary" src="/assets/spriteSafari/interrogation.png" alt="Smiley face"></center>
            </div>
        </div>
        <div class="">
            <center><input type="submit" value="Valider le choix" name="ajoutSafary"></center>
        </div>
    </form>
</div>
<?php
include 'vues/footer.php';
?>

