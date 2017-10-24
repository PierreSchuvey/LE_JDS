<!DOCTYPE html>
<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
    function myFunction() {
    document.getElementById("accueil").style.display = "block",
    $(".pokeball, h1, .landing").hide(1000);
  }
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/landing.css">
    <title>Le journal du shasseur</title>
  </head>
  <body>
    <a href="accueil.php">Accueil</a>
    <div class="landing">
    <h1 align="center">Le journal de Shasse</h1>
    <div class="pokeball">
      <div class="top">
        <div class="middle_circle">
            <button onclick="myFunction()" class="white_in"></button>
        </div>
      </div>
      <div class="bottom"></div>
    </div>
    <p align="center">Bienvenue à toi, clique sur le bouton pour entrer dans le monde de la shasse !</p>

    </div>
    <div id="accueil" class="container-fluid accueil">
      <div class="row">
        <div class="col-lg-12">
          <h2 align="center">Shasseur, Shasseuse, bienvenue!</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <p align="center">Bienvenue sur "lejournaldeshasse.fr", ici tu trouvera tous ceux qu'il te
            faut pour rendre t'es shasses plus agréables et optimales, tu pourras faire une suivis de
            ton pokedex une moyenne de t'es nombres de rencontres et même partager tes trouvailles avec
            les autres utilisateurs.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <p>Mais avant de commencer il te faudras créer un profil de shasseur ou   te connecter si tu en posséde déjà un : </p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-offset-2 col-lg-1">
            <div type="button" data-toggle="collapse" data-target="#connexion" class="pokeballbtn">
              <div class="pokeball__button"></div>
            </div>
        </div>
          <div class="col-lg-4">
            <p id="connec">Se connecter</p>
          </div>
          <div class="col-lg-1">
              <div  type="button" data-toggle="collapse" data-target="#inscription" class="pokeballbtn">
                  <div class="pokeball__button"></div>
              </div>
          </div>
            <div class="col-lg-4">
              <p id="inscrip">S'inscrire</p>
            </div>
        </div>
        <div class="row">
          <div class="col-lg-offset-2 col-lg-5">
          <div id="connexion" class="collapse">
            <form method="post" action="traitement.php" id="formco">
              <div class="formco">
                <label>Pseudo : </label>
                <input type="text" name="pseudoco" />
              </div>
              <div class="formco">
                <label>Mot de passe : </label>
                <input type="password" name="mdpco" />
              </div>
              <div class="formco">
                <input class="btn" type="submit" name="pseudo" value="Connexion" />
              </div>
              <div class="formco">
                <input class="btn" type="submit" name="pseudo" value="Connexion avec Facebook">
              </div>
              <div class="formco">
                <input  class="btn" type="submit" name="pseudo" value="Connexion avec Google">
              </div>
              <a href="#">Mot de passe oublié</a>
            </form>
          </div>
        </div>
        <div class="col-lg-4">
          <div id="inscription" class="collapse">
            <form method="post" action="traitement.php" id="formins">
              <div class="formins">
                <label>Pseudo : </label>
                <input type="text" name="pseudo" />
              </div>
              <div class="formins">
                <label>Mot de passe : </label>
                <input type="text" name="pseudo" />
              </div>
              <div class="formins">
                <label for="mail">Votre email :</label>
                <input type="email" id="mail" />
              </div>
              <div class="formins">
                <input  class="btn" type="submit" name="Connexion" value="S'inscrire" />
              </div>
              <div class="formins">
                <input type="checkbox" id="CGU" name="CGU" value="CGU">
                <label for="CGU">J'accepte les <a href="#">conditions générales d'utilisation</a></label>
              </div>
                <input type="checkbox" id="newsletter" name="subscribe" value="newsletter">
                <label for="newsletter">Je souhaite m'abonner à la newsletter</label>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
