<?php

include '../models/dataBase.php';
include '../models/methodes.php';
$allMethods = new methodes();
$allMethods->version = $_POST['methods'];
$methodsByVersions = $allMethods->getMethodsByVersion();
$encode = json_encode($methodsByVersions);
echo $encode;
?>

