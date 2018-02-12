<?php

class huntMethods extends dataBase {

    public $id = 0;
    public $methode = '';
    public $idVersion = 0;
    public $version = "";

    public function __construct() {
        parent::__construct();
    }

    public function getMethodsByVersion() {
        $allMethods = $this->db->prepare('SELECT methode FROM huntMethods INNER JOIN versions WHERE versions.version = :version AND huntMethods.idVersion = versions.id');
        $allMethods->bindValue(':version', $this->version, PDO::PARAM_STR);
        $allMethods->execute();
        $allMethods = $allMethods->fetchAll(PDO::FETCH_OBJ);
        return $allMethods;
    }

    public function __destruct() {

    }

}

?>