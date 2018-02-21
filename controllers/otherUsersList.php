<?php

if (!empty($_SESSION['id'])) {
    $otherUsersList = new users();
    $otherUsersList->id = $_SESSION['id'];
    $otherUsersList = $otherUsersList->oterUsers();
}
?>