<?php require_once 'util.php'; ?>
<?php include 'header.php' ?>
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
    if (isset($_POST['pseudoLog']) && isset($_POST['passwordLog'])) {
        $pseudo = $_POST['pseudoLog'];
        $password = $_POST['passwordLog'];
        try {
            $req = $dbh->query('SELECT * FROM users WHERE pseudo = ' . $pseudo . ' ');
            $row = $req->fetch();
            if (($row['pseudo'] == $pseudo) && ($row['password'] == $password)) {
                echo '<meta http-equiv="refresh" content="0; URL=profil.php">';
                $_SESSION['connected'] = 1;
                $_SESSION['pseudo'] = $row['pseudo'];
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
