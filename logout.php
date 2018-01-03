<?php require_once 'util.php'; ?>
<?php

session_unset();
session_destroy();
session_start();
$_SESSION['connected'] = 0;
header('Location: index.php');
?>

