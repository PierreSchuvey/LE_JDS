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
                <?php foreach ($otherUsersList as $allOtherUsers) { ?>
                    <tr>
                        <td><?= $allOtherUsers->pseudo; ?></td>
                        <td>100 %</td>
                        <td><a href="visite_du_profil/<?= $allOtherUsers->pseudo; ?>" type="submit"><img src="/assets/img/loupepkm.png"></a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
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
