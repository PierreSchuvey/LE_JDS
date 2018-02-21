<?php

$userConnected = new users();
if (!empty($_SESSION['id'])) {
    $userConnected->id = $_SESSION['id'];
    $userConnected = $userConnected->connectedInfos();
    $safaryFiend = new safaryFriend();
    $safaryFiend->idUser = $_SESSION['id'];
    $safaryFiend = $safaryFiend->getSafaryByUser();
}
?>