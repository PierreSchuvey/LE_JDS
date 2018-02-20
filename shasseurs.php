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
        <?php foreach ($otherUsersList as $allOtherUsers) { ?>
            <div class="col-lg-6 colShasseurs">
                <span><?= $allOtherUsers->pseudo; ?></span>
                <span>100%</span>
                <a href="visite_du_profil/<?= $allOtherUsers->pseudo; ?>" type="submit"><img src="/assets/img/loupepkm.png"></a>
            </div>
        <?php } ?>
    </div>
<?php } else {
    ?>
    <div class="container  bodyPage">
        <center><p>Veuillez vous inscrire ou vous connecter pour voir le profil des autres utilisateurs.</p></center>
        <div class="row">
            <div class="col-lg-12 text-center">
                <a href="/connexion" alt="connexion" id="subscribe">Connexion / Inscription</a>
            </div>
        </div>
    <?php }
    ?>
</div>
<?php include 'vues/footer.php' ?>
