<?php
include_once 'vues/header.php';
include_once 'vues/leftbar.php';
include_once 'models/dataBase.php';
include_once 'models/users.php';
include_once 'models/safaryFriend.php';
include_once 'models/hunts.php';
include_once 'controllers/otherUsersProfil.php';
include_once 'vues/lastCapture.php';
?>

<div class="container bodyPage">
    <div class="row">
        <div class="col-xs-offset-1 col-sm-offset-0 col-sm-1 col-md-offset-3 col-md-5 col-lg-offset-0 col-lg-1">
            <img id="profilImage" src="/media/img/<?= $otherUsersProfil->id ?>/<?= $otherUsersProfil->profilePicture; ?>" />
        </div>
        <div class="col-sm-offset-5 col-md-offset-2 col-lg-offset-4">
            <p id="welcomeText" class="mainTitle" text-align="center">Profil de <span id="currentPseudo"><?= $otherUsersProfil->pseudo; ?></span></p>
        </div>
        <div class="col-sm-offset-5 col-md-offset-2 col-lg-offset-4">
            <p id="caProfil">Code Ami : <?= $otherUsersProfil->friendCode; ?></p>
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
                    <p>Cet utilisateur ne pocéde pas de safari amis</p>
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
                <textarea id="aboutMe" name="aboutMe" rows="10" cols="83" readonly disabled><?= $otherUsersProfil->bioUsers; ?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-offset-11">
                <span id="validModifTextarea">Valider</span>
            </div>
        </div>
        <div class = "row">
            <hr /><hr />
            <div class = "col-lg-12 progressProfil">
                <p>Total : <?= round($otherUsersProfil->nbUsersHunts / 825 * 100, 2); ?> %</p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar"aria-valuemin="0" aria-valuemax="100" style="width:<?= round($otherUsersProfil->nbUsersHunts / 825 * 100, 2); ?>%"></div>
                </div>
            </div>
            <?php
            if (!empty($finishedHuntByGen)) {
                ?>
                <button id = "moreProgress">+</button>
                <button id = "reduceProgress">-</button>
                <div id = "subprogress">
                    <?php if (isset($finishedHuntByGen[0])) { ?>
                        <div class = "col-lg-6 progressProfil">
                            <p>Génération <?= $finishedHuntByGen[0]->idGen ?> = <?= round($finishedHuntByGen[0]->numberOfFinishedHunt / 151 * 100, 2); ?> %</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar"aria-valuemin="0" aria-valuemax="100" style="width:<?= round($finishedHuntByGen[0]->numberOfFinishedHunt / 151 * 100, 2); ?>%"></div>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if (isset($finishedHuntByGen[1])) { ?>
                        <div class = "col-lg-6 progressProfil">
                            <p>Génération <?= $finishedHuntByGen[1]->idGen ?> = <?= round($finishedHuntByGen[1]->numberOfFinishedHunt / 99 * 100, 2); ?> %</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar"aria-valuemin="0" aria-valuemax="100" style="width:<?= round($finishedHuntByGen[1]->numberOfFinishedHunt / 99 * 100, 2); ?>%"></div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <?php
        }
        ?>
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
<?php include 'vues/footer.php' ?>
