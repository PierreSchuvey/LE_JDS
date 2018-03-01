<?php
include_once 'vues/header.php';
include_once 'vues/leftbar.php';
include_once 'models/dataBase.php';
include_once 'models/hunts.php';
include_once 'controllers/huntHistoryController.php';
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
                    <th class="col-lg-2">Date/heure de capture</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (empty($finishedHunt)) {
                    ?></table><center><p>Vous n'avez pas de shasses en cours </p><?php
                } else {
                    foreach ($finishedHunt as $finishedHunt) {
                        ?>
                    <tr>
                        <td><?= $finishedHunt->pokemon; ?></td>
                        <td><?= $finishedHunt->version; ?></td>
                        <td><?= $finishedHunt->method; ?></td>
                        <td><?= $finishedHunt->nbEncounter; ?></td>
                        <td><?= $finishedHunt->endDate; ?></td>
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