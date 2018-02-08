<?php
include '../models/dataBase.php';
include '../models/versions.php';
$firstGeneration = new versions();
$firstGeneration->idGeneration = 3;
$firstGeneration = $firstGeneration->firstGeneration();
foreach ($firstGeneration as $firstGeneration) {
    ?>
    <tr>
        <td id = "bodyTableLocal"><?= $firstGeneration->version; ?> </td>
        <td></td>
    </tr>
    <?php
}
?>