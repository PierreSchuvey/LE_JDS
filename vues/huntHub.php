<form action="#" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="form-group col-lg-offset-2 col-lg-3">
            <p><label>Version : </label></p>
            <select name="versionSelected" id="versionSelected" class="btn">
                <?php if (isset($savingHunt->version)) {
                    ?>
                    <option class="btn" value="<?= $savingHunt->version; ?>"><?= $savingHunt->version; ?></option>
                    <?php
                } else {
                    ?>
                    <option>Versions</option>
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
                <?php if (isset($savingHunt->method)) {
                    ?>
                    <option><?= $savingHunt->method; ?></option>
                    <?php
                } else {
                    ?>
                    <option>Méthodes</option>
                    <?php
                }
                ?>
            </select>
        </div>
    </div>
    <input type="number" name="encounterCount" id="counter" value="<?= isset($savingHunt->nbEncounters) ? $savingHunt->nbEncounters : '0' ?>">
    <center><div class="row">
            <input type="submit" value="Sauvegarder la shasse !" name="saveHunt" class="btn">
            <input type="submit" value="Capturé !" name="validHunt" class="btn">
        </div></center>
</form>
</div>