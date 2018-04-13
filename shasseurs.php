<?php
include_once 'vues/header.php';
include_once 'vues/leftbar.php';
include_once 'models/dataBase.php';
include_once 'models/users.php';
include_once 'models/hunts.php';
include_once 'controllers/otherUsersList.php';
include_once 'vues/lastCapture.php';
if (isset($_SESSION['connected']) && $_SESSION['connected'] == 1) {
    ?>
    <div class = "container bodyPage">
        <table class="col-lg-offset-1 col-lg-10" id="savedShasse">
            <thead>
                <tr>
                    <th class="col-lg-4">Pseudo</th>
                    <th class="col-lg-4">Avancement</th>
                    <th class="col-lg-4">Voir le profil</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listShasseurs as $listShasseurs) { ?>
                    <tr>
                        <td><?= $listShasseurs->pseudo; ?></td>
                        <td><?= round($listShasseurs->nbUsersHunts / 825 * 100, 2); ?> %</td>
                        <td><a href="visite_du_profil/<?= $listShasseurs->pseudo; ?>" type="submit"><img src="/assets/img/loupepkm.png"></a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php if ($usersCount->numberOfUsers > 13) { ?>
            <div class = "row">
                <div class = "col-lg-offset-4">
                    <a href = "/liste_des_shasseurs?page=<?= $page - 1 ?>" class = "<?= $start <= 1 ? 'disabled' : '' ?> btn">Précédente</a>
                    <?php for ($pageNumber = 1; $pageNumber <= $maxPagination; $pageNumber++) {
                        ?>
                        <a href="/liste_des_shasseurs?page=<?= $pageNumber ?>" class="<?= $page == $pageNumber ? 'disabled' : '' ?> btn" ><?= $pageNumber ?></a>
                    <?php } ?>
                    <a href="/liste_des_shasseurs?page=<?= $page + 1 ?>" class="<?= $page >= $maxPagination ? 'disabled' : '' ?> btn">Suivante</a>
                </div>
            </div>
        </div>
        <?php
    }
} else {
    ?>
    <center><p>Veuillez vous inscrire ou vous connecter pour voir le profil des autres utilisateurs.</p></center>
    <div class="row">
        <div class="col-lg-12 text-center">
            <a href="/connexion" alt="connexion" id="subscribe">Connexion / Inscription</a>
        </div>
    </div>
<?php }
?>
<?php include 'vues/footer.php' ?>
