<?php
include_once 'vues/header.php';
include_once 'vues/leftbar.php';
include_once 'models/dataBase.php';
include_once 'models/hunts.php';
?>
<?php
if (isset($_SESSION['connected']) && $_SESSION['connected'] == 1) {
    include_once 'vues/lastCapture.php';
}
?>
<div class = "container bodyPage">
    <div class = "col-xs-offset-1">
        <h1 id = "welcomeText" class = "mainTitle">Bienvenue sur le journal du Shasseur!</h1>
    </div>
    <div class = "col-lg-12">
        <p class = "introInfos">
            Le journal de shasse est un site communautaire pour tous les fans de Pokemon, passionnés de shasses aux chromatiques,
            ce site t'offriras de nombreuses possibilités aides dans l'accomplissement de ta quête des 807 chromatiques.
        </p>
        <p class = "introInfos">
            Différentes astuces te serons proposés, ainsi qu'un suivis personnels de tes captures (nombre de rencontres, date, heure),
            tu y trouveras aussi la localisation et les différentes méthodes pour shasser chacune de tes futures cibles.
        </p>
        <p class="introInfos">
            Tu pourras également discuter, aider, ou comparer tes résultats de shasse avec les autres utilisateurs,
            c'est pourquoi il vous sera demander de rester courtois avec l'ensemble des shasseurs.
        </p>
    </div>
    <?php
    if (isset($_SESSION['connected']) && $_SESSION['connected'] == 1) {

    } else {
        ?>
        <div class="row">
            <div class="col-lg-12 text-center">
                <a href="/connexion" alt="connexion" id="subscribe">Connexion / Inscription</a>
            </div>
        </div>
    </div>
    <?php
}
?>
<?php include 'vues/footer.php' ?>
