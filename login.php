<?php require_once 'util.php'; ?>
<?php include 'header.php' ?>
<?php include 'leftbar.php' ?>
<div class="hidden-xs hidden-sm topLog" id="lastCaptureHub">
    <img id="lastCapture" src="/assets/gif/zorua.gif"/>
    <img id="lastCaptureS" src="/assets/gif/zoruaS.gif"/>
    <p class="lastCaptureInfos lastCaptureName">Zorua !</p>
    <p class="lastCaptureInfos">Dérniére capture !</p>
    <p class="lastCaptureInfos">Version : ROSA</p>
    <p class="lastCaptureInfos">Méthode : Navi-Dex</p>
    <p class="lastCaptureInfos">Nombres de rencontres : 732</p>
</div>
<div class="container bodyPage" id="loginContainer">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1>Connexion</h1>
            <form action="login.php" method="post">
                <div class="form-group col-lg-offset-4 col-lg-4 topLog">
                    <label for="exampleInputEmail1">Pseudo</label>
                    <input type="text" class="form-control" name="pseudoLog">
                </div>
                <div class="form-group col-lg-offset-4 col-lg-4">
                    <label for="exampleInputEmail1">Mot de passe</label>
                    <input type="password" class="form-control" name="passwordLog">
                    <small><a href="#">Mot de passe oublie ?</a></small>
                </div>
                <div class="form-group col-lg-offset-4 col-lg-4">
                    <button type="submit" class="form-control"> Connexion</button>
                    <small>Vous n'êtes pas encore inscrit ? Alors cliquer : <a href="#" alt="Inscription" id="subscribe">Ici</a></small>
                </div>
            </form>
        </div>
    </div>
    <?php
    require_once 'util.php';
    if (!empty($_POST['pseudoLog']) && !empty($_POST['passwordLog'])) {
        $pseudo = $_POST['pseudoLog'];
        $password = $_POST['passwordLog'];
        try {
            foreach ($dbh->query('SELECT * from users') as $row) {
                if (($row['pseudo'] == $pseudo) && ($row['password'] == $password)) {
                    echo '<meta http-equiv="refresh" content="0; URL=profil.php">';
                    $_SESSION['connected'] = 1;
                } else {
                    ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <?php
                            echo '<center>Votre mot de passe / pseudo n\'est pas correct</center>';
                            ?>
                        </div>
                    </div>
                    <?php
                }
            }
            $dbh = null;
        } catch (PDOException $e) {
            echo 'Erreur!: ' . $e->getMessage() . '<br/>';
            die();
        }
    }
    ?>
</div>
<?php include 'subscribeForm.php' ?>
<?php include 'footer.php' ?>
