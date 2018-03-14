<?php

include_once '../models/dataBase.php';
include_once '../models/hunts.php';

$deletePokemon = new hunts();
$deletePokemon->id = $_POST['idHunt'];
$deletePokemon->deleteSavedHunt();
?>