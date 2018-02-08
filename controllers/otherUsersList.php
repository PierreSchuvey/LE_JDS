<?php

$otherUsersList = new users();
$otherUsersList->id = $_SESSION['id'];
$otherUsersList = $otherUsersList->oterUsers();
?>