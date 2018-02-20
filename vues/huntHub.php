<?php ?>
<form action="#" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="form-group col-lg-offset-1 col-lg-3">
            <p><label>Version : </label></p>
            <select name="versionSelected"  id="versionSelected">
                <?php if (!empty($_GET['version'])) {
                    ?>
                    <option><?= $_GET['version']; ?></option>
                    <?php
                } else {
                    ?>
                    <option>Sélectionnez la version</option>
                    <?php
                }
                foreach ($allVersion as $allVersion) {
                    ?><option><?= $allVersion->version ?></option><?php
                }
                ?>
            </select>
        </div>
        <div class="form-group col-lg-offset-1 col-lg-3">
            <p><label>Methode : </label></p>
            <select name="methodSelected" id="allMethodsByVersion">
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
        <div class="form-group col-lg-offset-1 col-lg-3">
            <label>Charme Chroma : </label>
            <input type="checkbox">
        </div>
    </div>
    <input type="number" name="encounterCount" id="counter" value="<?= !empty($_GET['nbEncounter']) ? $_GET['nbEncounter'] : '0' ?>">
    <center><div class="row">
            <input type="submit" value="Sauvegarder la shasse !" name="saveHunt">
            <input type="submit" value="Capturé !" name="validHunt">
        </div></center>
</form>
</div>