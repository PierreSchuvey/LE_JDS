<?php
include_once 'vues/header.php';
include_once 'models/dataBase.php';
include_once 'models/users.php';
include_once 'controllers/loginUsers.php';
?>
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
                    <button type="submit" class="form-control" name="logInSubmit"> Connexion</button>
                    <p class="errorsLoginSub"><?= isset($formError['passwordLog']) ? $formError['passwordLog'] : '' ?><?= isset($formError['pseudoLog']) ? $formError['pseudoLog'] : '' ?></p>
                    <small>Vous n'êtes pas encore inscrit ? Alors cliquer : <a href = subscribeForm.php alt = "Inscription" id = "subscribe">Ici</a></small>
                </div>
            </form>
        </div>
    </div>
    <div class = "row">
        <div class = "col-lg-12">
        </div>
    </div>
</div>
<?php include 'vues/footer.php' ?>
