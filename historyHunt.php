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
                if (empty($finishedHuntList)) {
                    ?><center><p>Vous avez terminé aucune shasses ! </p><?php
                    } else {
                        foreach ($finishedHuntList as $finishedHuntList) {
                            ?>
                        <tr>
                            <td><?= $finishedHuntList->pokemon; ?></td>
                            <td><?= $finishedHuntList->version; ?></td>
                            <td><?= $finishedHuntList->method; ?></td>
                            <td><?= $finishedHuntList->nbEncounter; ?></td>
                            <td><?= $finishedHuntList->endDate; ?></td>
                        </tr>
                        <?php
                    }
                }
                ?>
        </table>
        <?php
        if ($finishedHuntCount->numberOfFinishedHunt > 7) {
            ?>
            <div class="row">
                <div class="col-lg-offset-4">
                    <a href="/historique_de_mes_captures?page=<?= $page - 1 ?>" class="<?= $start <= 1 ? 'disabled' : '' ?> btn">Précédente</a>
                    <?php for ($pageNumber = 1; $pageNumber <= $maxPagination; $pageNumber++) { ?>
                        <a href="/historique_de_mes_captures?page=<?= $pageNumber ?>" class="<?= $page == $pageNumber ? 'disabled' : '' ?> btn" ><?= $pageNumber ?></a>
                    <?php } ?>
                    <a href="/historique_de_mes_captures?page=<?= $page + 1 ?>" class="<?= $page >= $maxPagination ? 'disabled' : '' ?> btn">Suivante</a>
                </div>
            </div>
        </div>
        <?php
    }
} else {
    ?>
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