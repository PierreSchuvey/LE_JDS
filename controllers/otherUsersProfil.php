<?php

$otherUsersProfil = new users();
$otherUsersProfil->pseudo = $_POST['otherUser'];
$otherUsersProfil = $otherUsersProfil->oterUsersInfos();
?>

