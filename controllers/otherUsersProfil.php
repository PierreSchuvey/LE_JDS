<?php

$otherUsersProfil = new users();
$otherUsersProfil->pseudo = $_GET['nameShasseur'];
$otherUsersProfil = $otherUsersProfil->oterUsersInfos();
$safaryFiend = new safaryFriend();
$safaryFiend->pseudo = $_GET['nameShasseur'];
$safaryFiend = $safaryFiend->getSafaryByOtherUser();
$finishedHunts = new hunts();
$finishedHunts->idUser = $otherUsersProfil->id;
$finishedHuntByGen = $finishedHunts->countFinishedHuntByGen();
?>

