<?php
include_once 'vues/header.php';
include_once 'vues/leftbar.php';
include_once 'models/dataBase.php';
include_once 'models/users.php';
include_once 'models/safaryFriend.php';
include_once 'controllers/usersInfos.php';
?>
<?php
if (isset($_SESSION['connected']) && isset($_SESSION['id']) && $_SESSION['connected'] == 1) {
    ?>
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
        <div class="row">
            <div class="col-xs-offset-1 col-sm-offset-0 col-sm-1 col-md-offset-3 col-md-5 col-lg-offset-0 col-lg-1">
                <img  id="profilImage" src="/media/img/<?= $userConnected->id ?>/<?= $userConnected->profilePicture; ?>" />
            </div>
            <div class="col-sm-offset-5 col-md-offset-2 col-lg-offset-4">
                <p id="welcomeText" class="mainTitle">Bienvenue, <?= $userConnected->pseudo; ?> !</p>
            </div>


            <div class="col-sm-offset-5 col-md-offset-2 col-lg-offset-4">
                <p id="caProfil">Code Ami : <?= $userConnected->friendCode; ?></p>
            </div>
            <?php
            if ($safaryFiend) {
                ?>
                <div id = "safariHub">
                    <div class = "col-xs-10 col-sm-11 col-md-9 col-lg-10">
                        <p id = "friendPark" >Safari Ami <img id = "typePark" src = "/assets/spriteSafari/<?= $safaryFiend->type ?>.png"/></p>
                    </div>
                    <div class = "col-xs-offset-2 col-xs-10 col-sm-offset-0 col-sm-10 col-md-offset-0 col-md-9 col-lg-offset-0 col-lg-10">
                        <span id = "pkmPark">
                            <img src = "/assets/spriteSafari/<?= $safaryFiend->firstPokemon ?>.png"/>
                            <img src = "/assets/spriteSafari/<?= $safaryFiend->secondPokemon ?>.png"/>
                            <img src = "/assets/spriteSafari/<?= $safaryFiend->thirdPokemon ?>.png"/>
                        </span>
                    </div>
                </div>
                <?php
            } else {
                ?>
                <div id = "safariHub">
                    <div class = "col-xs-10 col-sm-11 col-md-9 col-lg-offset-5">
                        <a href="/ajout_du_parc">Ajout du parc Safari</a>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
        <div id="infoHub">
            <hr /><hr />
            <div class="row">
                <div class="col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
                    <p>A propos de moi : <span id="modifTextarea">Modifier </span></p>
                    <textarea id="aboutMe" name="aboutMe" rows="10" cols="83" readonly disabled><?= utf8_encode($userConnected->bioUsers); ?></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-offset-11">
                    <span id="validModifTextarea">Valider</span>
                </div>
            </div>
            <div class="row">
                <hr /><hr />
                <div class="col-lg-12 progressProfil">
                    <p>Total :</p>
                    <div class="progress barProgress">
                        <div class="progress progressAchievement" id="progressAllG" aria-valuenow="1"></div>
                    </div>
                </div>
                <button id="moreProgress">+</button>
                <button id="reduceProgress">-</button>
                <div id="subprogress">
                    <div class="col-lg-6 progressProfil">
                        <p>1ére génération</p>
                        <div class="progress barProgress">
                            <div class="progress progressAchievement" id="progress1G" aria-valuenow="1" aria-valuemax="70"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 progressProfil">
                        <p>2éme génération</p>
                        <div class="progress barProgress">
                            <div class="progress progressAchievement" id="progress2G" aria-valuenow="1"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 progressProfil">
                        <p>3éme génération</p>
                        <div class="progress barProgress">
                            <div class="progress progressAchievement" id="progress3G" aria-valuenow="1"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 progressProfil">
                        <p>4éme génération</p>
                        <div class="progress barProgress">
                            <div class="progress progressAchievement" id="progress4G" aria-valuenow="1"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 progressProfil">
                        <p>5éme génération</p>
                        <div class="progress barProgress">
                            <div class="progress progressAchievement" id="progress5G" aria-valuenow="1"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 progressProfil">
                        <p>6éme génération</p>
                        <div class="progress barProgress">
                            <div class="progress progressAchievement" id="progress6G" aria-valuenow="1"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 progressProfil">
                        <p>7éme génération</p>
                        <div class="progress barProgress">
                            <div class="progress progressAchievement" id="progress7G" aria-valuenow="1"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 progressProfil">
                        <p>Formes d'alola</p>
                        <div class = "progress barProgress">
                            <div class = "progress progressAchievement" id = "progressAlola" aria-valuenow = "1"></div>
                        </div>
                    </div>
                </div>
            </div>
            <hr /><button id = "showRatios">Voir les ratios de captures</button><button id = "hideRatios">Cacher les ratios de captures</button><hr />
            <div id = "ratioHub">
                <div class = "row ratioStats">
                    <div class = "col-lg-offset-1 col-lg-6">
                        <strong><span class = "ratioGeneration">1ére Génération :</span></strong>
                        <p>Random full odds : <span class = "odds8000">7000</span> rencontres</p>
                        <p>Reset: <span class = "odds8000">9000</span> rencontres</p>
                    </div>
                    <div class = "col-lg-5">
                        <span class = "ratioGeneration">2éme Génération :</span>
                        <p>Random full odds : <span class = "odds8000">6000</span> rencontres</p>
                        <p>Elevage full odds : <span class = "odds8000">9000</span> rencontres</p>
                        <p>Elevage 1/64 : <span class = "oeuf64">64</span> rencontres</p>
                    </div>
                </div>
                <div class = "row ratioStats">
                    <div class = "col-lg-offset-1 col-lg-6">
                        <span class = "ratioGeneration">3éme Génération :</span>
                        <p>Random full odds : <span class = "odds8000">4000</span> rencontres</p>
                        <p>Reset: <span class = "odds8000">6752</span> rencontres</p>
                    </div>
                    <div class = "col-lg-5">
                        <span class = "ratioGeneration">4éme Génération :</span>
                        <p>Random full odds : <span class = "odds8000">4000</span> rencontres</p>
                        <p>Reset: <span class = "odds8000">6752</span> rencontres</p>
                        <p>Masuda : <span class = "masudaDP">2000</span> rencontres</p>
                    </div>
                </div>
                <div class = "row ratioStats">
                    <div class = "col-lg-offset-1 col-lg-6">
                        <span class = "ratioGeneration">5éme Génération :</span>
                        <p>Random full odds : <span class = "odds8000">4000</span> rencontres</p>
                        <p>Random Charme Chroma : <span class = "oddsCC">6752</span> rencontres</p>
                        <p>Reset full odds: <span class = "odds8000">9000</span> rencontres</p>
                        <p>Reset Charme Chroma : <span class = "oddsCC">6752</span> rencontres</p>
                        <p>Masuda full odds:<span class = "masudaNB"> 9000</span> rencontres</p>
                        <p>Masuda Charme Chroma : <span class = "masudaNBCC">6752</span> rencontres</p>
                    </div>
                    <div class = "col-lg-5">
                        <span class = "ratioGeneration">6éme Génération :</span>
                        <p>Random full odds : <span class = "odds4000">6752</span> rencontres</p>
                        <p>Random Charme Chroma : <span class = "oddsCC6G">6752</span> rencontres</p>
                        <p>Reset full odds : <span class = "odds4000">6752</span> rencontres</p>
                        <p>Reset Charme Chroma: <span class = "oddsCC6G">6752</span> rencontres</p>
                        <p>Masuda full odds : <span class = "masuda">6752</span> rencontres</p>
                        <p>Masuda Charme Chroma: <span class = "masudaCC">6752</span> rencontres</p>
                        <p>Horde full odds : <span class = "horde">6752</span> rencontres</p>
                        <p>Horde Charme Chroma: <span class = "hordeCC">6752</span> rencontres</p>
                        <p>Pêche full odds : <span class = "peche">6752</span> rencontres</p>
                        <p>Pêche Charme Chroma: <span class = "pecheCC">6752</span> rencontres</p>
                        <p>Navi-dex : <span class = "navidex">512</span> rencontres</p>
                        <p>Safari des amis : <span class = "safari">6752</span> rencontres</p>
                    </div>
                </div>
                <div class = "row ratioStats">
                    <div class = "col-lg-offset-1 col-lg-6">
                        <span class = "ratioGeneration">7éme Génération :</span>
                        <p>Random full odds : <span class = "odds4000">6752</span> rencontres</p>
                        <p>Random Charme Chroma : <span class = "oddsCC6G">6752</span> rencontres</p>
                        <p>Reset full odds : <span class = "odds4000">6752</span> rencontres</p>
                        <p>Reset Charme Chroma: <span class = "oddsCC6G">6752</span> rencontres</p>
                        <p>Masuda full odds : <span class = "masuda">6752</span> rencontres</p>
                        <p>Masuda Charme Chroma: <span class = "masudaCC">6752</span> rencontres</p>
                        <p>SOS full odds : <span class = "SOS">2000</span> rencontres</p>
                        <p>SOS Charme Chroma : <span class = "SOS">2000</span> rencontres</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
} else {
    ?>
    <center>Pour voir votre profil veuillez vous connectez ou vous inscrire</center>
    <div class="row">
        <div class="col-lg-12 text-center">
            <a href="/connexion" alt="connexion" id="subscribe">Connexion / Inscription</a>
        </div>
    </div>
    <?php
}
?>
<?php include 'vues/footer.php' ?>
