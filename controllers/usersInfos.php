<?php

$userConnected = new users();
if (isset($_SESSION['id'])) {
    $userConnected->id = $_SESSION['id'];
}
$userConnected = $userConnected->connectedInfos();
?>