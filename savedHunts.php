<?php
include_once 'vues/header.php';
include_once 'vues/leftbar.php';
include_once 'models/dataBase.php';
include_once 'models/hunts.php';
include_once 'controllers/savedHuntControllers.php';
include_once 'vues/lastCapture.php';
if (isset($_SESSION['connected']) && $_SESSION['connected'] == 1) {
    ?>
    <div class = "container bodyPage">
        <table class="" id="savedShasse">
            <thead>
                <tr>
                    <th class="col-lg-2">Pokemon</th>
                    <th class="col-lg-2">Version</th>
                    <th class="col-lg-2">Methode</th>
                    <th class="col-lg-2">Nombre de rencontres</th>
                    <th class="col-lg-2">Reprendre la shasse</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (empty($saveHunts)) {
                    ?></table><center><p>Vous n'avez pas de shasses en cours </p><?php
                } else {
                    foreach ($saveHunts as $saveHunts) {
                        ?>
                    <tr>
                        <td><?= $saveHunts->pokemon; ?></td>
                        <td><?= $saveHunts->version; ?></td>
                        <td><?= $saveHunts->method; ?></td>
                        <td><?= $saveHunts->nbEncounter; ?></td>
                        <td><a href="/shasse_en_cours/<?= $saveHunts->pokemon; ?>_<?= $saveHunts->version; ?>_<?= $saveHunts->method; ?>_<?= $saveHunts->nbEncounter; ?>" type="submit"><img src="/assets/img/loupepkm.png"></a></td>
                    </tr>
                    <?php
                }
            }
            ?>
            </tbody>
            </table>
    </div>
<?php } else { ?>
    <div class="container  bodyPage">
        <center><p>Veuillez vous inscrire ou vous connecter pour voir vos shasses en cours.</p></center>
        <div class="row">
            <div class="col-lg-12 text-center">
                <a href="/connexion" alt="connexion" id="subscribe">Connexion / Inscription</a>
            </div>
        </div>
    </div>
    <?php
}
include_once 'vues/footer.php';
?>