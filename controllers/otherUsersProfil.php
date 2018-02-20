<?php

$otherUsersProfil = new users();
$otherUsersProfil->pseudo = $_GET['nameShasseur'];
$otherUsersProfil = $otherUsersProfil->oterUsersInfos();

$safaryFiend = new safaryFriend();
$safaryFiend->pseudo = $_GET['nameShasseur'];
$safaryFiend = $safaryFiend->getSafaryByOtherUser();
?>

