<?php

class users extends dataBase {

    public $id = 0;
    public $pseudo = '';
    public $email = '';
    public $password = '';
    public $profilePicture = '';
    public $friendCode = '';
    public $bioUsers = '';

    public function __construct() {
        parent::__construct();
    }

    public function loginIn() {
        $userLog = $this->db->prepare('SELECT `id`,`pseudo`, `email`, `password`, `profilePicture`, `friendCode`, `bioUsers` FROM `users` WHERE `pseudo` = :pseudo');
        $userLog->bindValue(':pseudo', $this->pseudo, PDO::PARAM_STR);
        $userLog->execute();
        return $userLog = $userLog->fetch(PDO::FETCH_OBJ);
    }

    public function connectedInfos() {
        $userConnected = $this->db->prepare('SELECT `id`, `pseudo`, `email`,  `password`, `friendCode`, `bioUsers`, `profilePicture` FROM users WHERE id = :id');
        $userConnected->bindValue(':id', $this->id, PDO::PARAM_STR);

        if ($userConnected->execute()) {
            $userConnectedInfos = $userConnected->fetch(PDO::FETCH_OBJ);
            if (is_object($userConnectedInfos)) {
                $this->pseudo = $userConnectedInfos->pseudo;
                $this->password = $userConnectedInfos->password;
                $this->friendCode = $userConnectedInfos->friendCode;
                $this->bioUsers = $userConnectedInfos->bioUsers;
                $this->profilePicture = $userConnectedInfos->profilePicture;
                $this->email = $userConnectedInfos->email;
            }
            return $userConnectedInfos;
        }
    }

    public function oterUsers() {
        $otherUsersList = $this->db->prepare('SELECT `id`, `pseudo`, `password`, `friendCode`, `bioUsers`, `profilePicture` FROM users WHERE id <> :id');
        $otherUsersList->bindValue(':id', $this->id, PDO::PARAM_STR);
        $otherUsersList->execute();
        return $otherUsersList = $otherUsersList->fetchAll(PDO::FETCH_OBJ);
    }

    public function oterUsersInfos() {
        $otherUsersProfil = $this->db->prepare('SELECT `id`, `pseudo`, `password`, `friendCode`, `bioUsers`, `profilePicture`, `email` FROM users WHERE pseudo = :pseudo');
        $otherUsersProfil->bindValue(':pseudo', $this->pseudo, PDO::PARAM_STR);
        if ($otherUsersProfil->execute()) {
            $otherUserConnectedInfos = $otherUsersProfil->fetch(PDO::FETCH_OBJ);
            $this->pseudo = $otherUserConnectedInfos->pseudo;
            $this->password = $otherUserConnectedInfos->password;
            $this->friendCode = $otherUserConnectedInfos->friendCode;
            $this->bioUsers = $otherUserConnectedInfos->bioUsers;
            $this->profilePicture = $otherUserConnectedInfos->profilePicture;
            $this->email = $otherUserConnectedInfos->email;
        }
        return $otherUserConnectedInfos;
    }

    public function allPseudoUser() {
        $query = 'SELECT `id`, `pseudo` FROM `users`';
        $responseRequest = $this->db->query($query);
        if (is_object($responseRequest)) {
            $pseudoList = $responseRequest->fetchAll(PDO::FETCH_ASSOC);
        }
        return $pseudoList;
    }

    public function lastId() {
        $lastId = $this->db->prepare('SELECT MAX(`id`)+1 AS lastId FROM users');
        $lastId->execute();
        if (is_object($lastId)) {
            return $lastId = $lastId->fetch(PDO::FETCH_OBJ);
        }
    }

    public function addUser() {
        //On prépare la requête sql qui insert dans les champs selectionnés, les valeurs sont des marqueurs nominatifs
        $query = 'INSERT INTO `users`(`pseudo`, `email`, `password`, `profilePicture`, `friendCode`) VALUES(:pseudo, :email, :password, :profilePicture, :friendCode)';
        $addUser = $this->db->prepare($query);
        $addUser->bindValue(':pseudo', $this->pseudo, PDO::PARAM_STR);
        $addUser->bindValue(':email', $this->email, PDO::PARAM_STR);
        $addUser->bindValue(':password', $this->password, PDO::PARAM_STR);
        $addUser->bindValue(':profilePicture', $this->profilePicture, PDO::PARAM_STR);
        $addUser->bindValue(':friendCode', $this->friendCode, PDO::PARAM_STR);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        return $addUser->execute();
    }

    public function __destruct() {

    }

}

?>