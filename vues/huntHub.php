<?php ?>
<form action="#" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="form-group col-lg-offset-2 col-lg-3">
            <p><label>Version : </label></p>
            <select name="versionSelected" id="versionSelected" class="btn">
                <?php if (!empty($_GET['version'])) {
                    ?>
                    <option class="btn"><?= $_GET['version']; ?></option>
                    <?php
                } else {
                    ?>
                    <option>Sélectionnez la version</option>
                    <?php
                }
                foreach ($allVersion as $allVersion) {
                    ?><option value="<?= $allVersion->id ?>"><?= $allVersion->version ?></option><?php
                }
                ?>
            </select>
        </div>
        <div class="form-group col-lg-offset-2 col-lg-3">
            <p><label>Methode : </label></p>
            <select name="methodSelected" id="allMethodsByVersion" class="btn">
                <?php if (!empty($_GET['method'])) {
                    ?>
                    <option><?= $_GET['method']; ?></option>
                    <?php
                } else {
                    ?>
                    <option>Sélectionnez la version</option>
                    <?php
                }
                ?>
            </select>
        </div>
    </div>
    <input type="number" name="encounterCount" id="counter" value="<?= !empty($_GET['nbEncounter']) ? $_GET['nbEncounter'] : '0' ?>">
    <center><div class="row">
            <input type="submit" value="Sauvegarder la shasse !" name="saveHunt" class="btn">
            <input type="submit" value="Capturé !" name="validHunt" class="btn">
        </div></center>
</form>
</div>