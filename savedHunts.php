<?php
include_once 'vues/header.php';
include_once 'vues/leftbar.php';
include_once 'models/dataBase.php';
include_once 'models/hunts.php';
include_once 'vues/lastCapture.php';
include_once 'controllers/savedHuntControllers.php';
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
                    <th class="col-lg-2">Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (empty($listSavedHunt)) {
                    ?><center><p>Vous n'avez pas de shasses en cours </p><?php
                    } else {
                        foreach ($listSavedHunt as $listSavedHunt) {
                            ?>
                        <tr>
                            <td><?= $listSavedHunt->pokemon; ?></td>
                            <td><?= $listSavedHunt->version; ?></td>
                            <td><?= $listSavedHunt->method; ?></td>
                            <td><?= $listSavedHunt->nbEncounter; ?></td>
                            <td><a href="/shasse_en_cours/<?= $listSavedHunt->pokemon; ?>_<?= $listSavedHunt->version; ?>_<?= $listSavedHunt->method; ?>_<?= $listSavedHunt->nbEncounter; ?>" type="submit"><img src="/assets/img/loupepkm.png"></a></td>
                            <td><a class="btn btn-danger" href="/Generation_1/shasses_non_accomplies_page_1_<?= $listSavedHunt->id; ?>">Supprimer</a></td>
                        </tr>
                        <?php
                    }
                }
                ?>
                </tbody>
        </table>
        <?php
        if ($huntsCount->numberOfSavedHunt > 11) {
            ?>
            <div  id="savedHuntsInfo">
                <div class="row">
                    <div class="col-lg-offset-4">
                        <a href='/Generation_<?= $_GET['Gen']; ?>/shasses_non_accomplies_page_<?= $page - 1 ?>' class="<?= $start <= 1 ? 'disabled' : '' ?> btn">Précédente</a>
                        <?php for ($pageNumber = 1; $pageNumber <= $maxPagination; $pageNumber++) { ?>
                            <a href="/Generation_<?= $_GET['Gen']; ?>/shasses_non_accomplies_page_<?= $pageNumber ?>" class="<?= $page == $pageNumber ? 'disabled' : '' ?> btn" ><?= $pageNumber ?></a>
                        <?php } ?>
                        <a href="/Generation_<?= $_GET['Gen']; ?>/shasses_non_accomplies_page_<?= $page + 1 ?>" class="<?= $page >= $maxPagination ? 'disabled' : '' ?> btn">Suivante</a>
                    </div>
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