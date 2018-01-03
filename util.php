<?php

session_start();
$pass = 'Naruzozo02';
$user = 'root';
$dbh = new PDO('mysql:host=localhost;dbname=Test', $user, $pass);
?>