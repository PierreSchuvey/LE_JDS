<!DOCTYPE html>
<html ng-app="app" ng-controller="testCtrl">
    <head>
        <title>Le journal du Shasseur</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" href="assets/css/accueil.css" />
        <link rel="stylesheet" href="assets/css/header.css" />
        <link rel="stylesheet" href="assets/css/leftbar.css" />
        <link rel="stylesheet" href="assets/css/footer.css" />
        <link rel="stylesheet" href="assets/css/pokedex.css" />
        <link rel="stylesheet" href="assets/css/fichePkdx.css" />
        <link rel="stylesheet" href="assets/css/subscribe.css" />
        <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
        <script type="text/javascript" src="assets/js/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="assets/js/jquery.jrumble.1.3.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.3/angular.min.js"></script>
    </head>
    <body>
        <link rel="icon" type="image/png" href="assets/img/icobar.png" />
        <header>
            <div class="container">
                <div class="row no-padding">
                    <div class="col-xs-offset-4 hidden-sm hidden-md hidden-lg">
                        <img id="logonavxs" src="assets/img/argentaile.png" />
                    </div>
                    <div class="col-xs-12 col-sm-12">
                        <div class="hidden-sm hidden-md hidden-lg" id="navigateur">
                            <div id="navxs" class="col-xs-offset-2 search">
                                <input type="text" class="searchText" placeholder="Lancer une shasse aux infos">
                                <button type="submit" style="border: 0; background: transparent">
                                    <img src="assets/img/search.jpg" width="40" height="40" alt="submit" id="searchButton" />
                                </button>
                                <a href="logout.php"><img src="assets/img/deco.png" width="40" height="40" alt="submit" id="searchButton" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="col-xs-12 hidden-sm hidden-md hidden-lg" id="ul500">
                <div class="row">
                    <div class="col-xs-6">
                        <li><a id="lienancre8" class="mainTitle" href="profil.php" title="intro">Mon profil</a></li>
                        <li><a id="lienancre9" class="mainTitle" href="#" title="perso">Historique</a></li>
                        <li><a id="lienancre10" class="mainTitle" href="tips.php" title="skills">Astuces</a></li>
                    </div>
                    <li id="lienancre11"><a href="pokedex.php" class="mainTitle" id="subNavTitle" title="pokedex">Pokedex</a></li>
                    <li id="lienancre11"><a href="#" class="mainTitle" id="subNavTitle" title="experiences">Shasseurs</a></li>
                    <li id="lienancre11"><a href="#" class="mainTitle" id="subNavTitle" title="hobbies">Contact</a></li>
                </div>
            </ul>
            <div class="row">
                <div class="hidden-xs col-sm-12 col-md-12 col-lg-12">
                    <div id="navigateur">
                        <div class="row">
                            <div class="col-sm-1 col-md-1 col-lg-1">
                                <img id="logonav" src="assets/img/beta.png" />
                            </div>
                            <div class="col-md-1 col-lg-1">
                                <a href="index.php"><img id="logonav" src="assets/img/argentaile.png" /></a>
                            </div>
                            <div class="col-sm-offset-3 col-sm-3 col-md-offset-1 col-md-3 col-lg-offset-1 col-lg-2 colNav">
                                <a href="profil.php" alt="Mon profil" title="accueil" class="libelNav mainTitle" ><img src="assets/img/gold.png"/> Mon profil</a>
                            </div>
                            <div class="col-sm-5 col-md-5 col-lg-4 colNav">
                                <a href="accueil.php" alt="Mon profil" title="accueil" class="libelNav" ><img src="assets/img/home.png"/> Mon historique de shasses</a>
                            </div>
                            <div class="hidden-sm hidden-md col-lg-3 colNav">
                                <div class="search">
                                    <input type="text" class="searchText" placeholder="Lancer une shasse aux infos">
                                    <button type="submit" style="border: 0; background: transparent">
                                        <img src="assets/img/search.jpg" width="40" height="40" alt="submit" id="searchButton" />
                                    </button>
                                    <a href="logout.php"><img src="assets/img/deco.png" width="40" height="40" alt="submit" id="searchButton" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden-xs row">
                <div class="col-md-offset-3 col-lg-offset-2 col-lg-8">
                    <div id="subnav">
                        <div class="row">
                            <div class="col-sm-3 col-md-3 col-lg-3 colNav">
                                <a href="tips.php" class="libelNav"><img class="imgNav" src="assets/img/tips.png"/>Astuces</a>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3 colNav">
                                <a href="pokedex.php" class="libelNav"><img class="imgNav" src="assets/img/pokedex.png"/>Pokedex</a>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3 colNav">
                                <a href="#" class="libelNav"><img src="assets/img/trade.png"/>Shasseurs</a>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3 colNav">
                                <a href="#" class="libelNav"><img class="imgNav" src="assets/img/contact.png"/>Contact</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
