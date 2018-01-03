<?php require_once 'util.php'; ?>
<?php include 'header.php' ?>
<?php include 'leftbar.php' ?>
<div class="hidden-xs hidden-sm" id="lastCaptureHub">
    <img id="lastCapture" src="/assets/gif/zorua.gif"/>
    <img id="lastCaptureS" src="/assets/gif/zoruaS.gif"/>
    <p class="lastCaptureInfos lastCaptureName">Zorua !</p>
    <p class="lastCaptureInfos">Dérniére capture !</p>
    <p class="lastCaptureInfos">Version : ROSA</p>
    <p class="lastCaptureInfos">Méthode : Navi-Dex</p>
    <p class="lastCaptureInfos">Nombres de rencontres : 732</p>
</div>
<div class="container bodyPage">
    <div class="col-xs-offset-1">
        <h1 id="welcomeText" class="mainTitle">Bienvenue sur le journal du Shasseur !</h1>
    </div>
    <div class="col-lg-12">
        <p class="introInfos">
            Le journal de shasse est un site communautaire pour tous les fans de Pokemon, passionnés de shasses aux chromatiques,
            ce site t'offriras de nombreuses possibilités aides dans l'accomplissement de t'as quête des 807 chromatiques.
        </p>
        <p class="introInfos">
            Différentes astuces te serrons proposés, ainsi qu'un suivis personnels de t'es captures (nombre de rencontres, date, heure),
            tu y trouverras aussi la localisation et les différentes méhodes pour shasser chacune de t'es futures cibles.
        </p>
        <p class="introInfos">
            Tu pourras également discuter, aider, ou comparer vos résultats de shasse avec les autres utilisateurs,
            c'est pourquoi il vous serras demander de restercourtois avec l'enssemble des shasseurs
        </p>
    </div>
    <?php
    if ($_SESSION['connected'] == 1) {

    } else {
        ?>
        <div class="row">
            <div class="col-lg-12 text-center">
                <a href="login.php" alt="connexion" id="subscribe">Connexion / Inscription</a>
            </div>
        </div>
    </div>
    <?php
}
?>
<?php include 'footer.php' ?>
