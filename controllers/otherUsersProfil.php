<?php

$otherUsersProfil = new users();
$otherUsersProfil->pseudo = $_GET['nameShasseur'];
$otherUsersProfil = $otherUsersProfil->oterUsersInfos();
?>

