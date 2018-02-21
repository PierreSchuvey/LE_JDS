<?php
include_once 'vues/header.php';
include_once 'vues/leftbar.php';
include_once 'models/dataBase.php';
include_once 'models/users.php';
include_once 'models/safaryFriend.php';
include_once 'models/hunts.php';
include_once 'controllers/updateProfilController.php';
?>
<?php
if (isset($_SESSION['connected']) && isset($_SESSION['id']) && $_SESSION['connected'] == 1) {
    include_once 'vues/lastCapture.php';
}
?>
<?php
if (isset($_GET['infosUsersUpdate'])) {
    ?>
    <div class="container  bodyPage">
        <center><p id="errorAndValidAddSafary"><?= isset($formError['validInfos']) ? $formError['validInfos'] : ''; ?></p></center>
        <a href="/modification_du_mot_de_passe">Modifier le mot de passe</a>
        <form action="#" method="post" enctype="multipart/form-data">
            <div class="col-lg-offset-4 col-lg-4  topLog">
                <label>Pseudo* : </label>
            </div>
            <div class="form-group col-lg-offset-4 col-lg-4">
                <input type="text" name="pseudo" class="form-control" value="<?= $user->pseudo; ?>" >
                <p id="errorAndValidAddSafary"><?= isset($formError['pseudo']) ? $formError['pseudo'] : ''; ?></p>
            </div>
            <div class="form-group col-lg-offset-4 col-lg-5">
                <label>Code ami : </label>
            </div>
            <div class="form-group col-lg-offset-4 col-lg-4">
                <input type="text" name="friendCode" class="form-control" value="<?= $user->friendCode; ?>" >
                <p id="errorAndValidAddSafary"><?= isset($formError['friendCode']) ? $formError['friendCode'] : ''; ?></p>
            </div>
            <div class="form-group col-lg-offset-4 col-lg-5">
                <label>A propos de moi :</label>
            </div>
            <div class="row">
                <div class="col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
                    <textarea id="aboutMe" name="bioUsers" rows="10" cols="83"><?= $user->bioUsers; ?></textarea>
                    <p id="errorAndValidAddSafary"><?= isset($formError['bioUsers']) ? utf8_decode($formError['bioUsers']) : ''; ?></p>
                </div>
            </div>
            <div class="form-group form-group col-lg-offset-8 col-lg-2">
                <button type="submit" class="form-control" name="updateInfos"> Valider l'inscription</button>
            </div>
        </form>
    </div>
    <?php
} elseif (isset($_GET['profilePictureUpdate'])) {
    ?>
    <div class="container  bodyPage">
        <p id="errorAndValidAddSafary"><?= isset($formError['validPicture']) ? $formError['validPicture'] : ''; ?>
        <form action="#" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group col-lg-offset-3 col-lg-6">
                    <label>Photo de profil (jpg, jpeg, png) 1mo max  : </label>
                </div>
                <div class="form-group col-lg-offset-3 col-lg-4">
                    <input type="file" name="profilePicture" >
                    <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
                    <p class="errorsLoginSub"><?= isset($formError['errorFile']) ? $formError['errorFile'] : '' ?></p>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-offset-4 col-lg-4">
                    <input type="submit" class="btn" name="updatePicture" value="Valider la modification de l'image de profil">
                </div>
            </div>
        </form>
    </div>
    <?php
} elseif (isset($_GET['passwordUpdate'])) {
    ?>
    <div class="container  bodyPage">
        <p id="errorAndValidAddSafary"><?= isset($formError['validPassword']) ? $formError['validPassword'] : ''; ?>
        <form action="#" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group col-lg-offset-3 col-lg-6">
                    <label>Mot de passe actuel  : </label>
                </div>
                <div class="form-group col-lg-offset-3 col-lg-4">
                    <input type="password" name="currentPassword" >
                </div><div class="form-group col-lg-offset-3 col-lg-6">
                    <label>Nouveau mot de passe : </label>
                </div>
                <div class="form-group col-lg-offset-3 col-lg-4">
                    <input type="password" name="newPassword" >
                </div><div class="form-group col-lg-offset-3 col-lg-6">
                    <label>Confirmation du nouveau mot de passe  : </label>
                </div>
                <div class="form-group col-lg-offset-3 col-lg-4">
                    <input type="password" name="confirmNewPassword" >
                </div>
            </div>
            <?php
            foreach ($formError as $formError) {
                echo $errorPassword;
            }
            ?>
            <div class="row">
                <div class="form-group col-lg-offset-4 col-lg-4">
                    <input type="submit" class="btn" name="updatePassword" value="Valider la modification de l'image de profil">
                </div>
            </div>
        </form>
    </div>
    <?php
}
include 'vues/footer.php'
?>
