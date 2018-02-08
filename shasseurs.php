<?php
include_once 'vues/header.php';
include_once 'vues/leftbar.php';
include_once 'models/dataBase.php';
include_once 'models/users.php';
include_once 'controllers/otherUsersList.php';
if (isset($_SESSION['connected']) && $_SESSION['connected'] == 1) {
    ?>
    <div class = "hidden-xs hidden-sm" id = "lastCaptureHub">
        <img id = "lastCapture" src = "/assets/gif/zorua.gif"/>
        <img id = "lastCaptureS" src = "/assets/gif/zoruaS.gif"/>
        <p class = "lastCaptureInfos lastCaptureName">Zorua!</p>
        <p class = "lastCaptureInfos">Dernière capture!</p>
        <p class = "lastCaptureInfos">Version : ROSA</p>
        <p class = "lastCaptureInfos">Méthode : Navi-Dex</p>
        <p class = "lastCaptureInfos">Nombres de rencontres : 732</p>
    </div>
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
