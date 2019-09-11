<?php

#   Create a DB entity class with autosave

class DbEntity {
    private $db;

    public function __construct($dbname) {
        $this->db = new PDO('mysql:host=192.168.20.20; dbname=' . $dbname, 'root', '');
        $this->db->setAttribute(
            PDO::ATTR_DEFAULT_FETCH_MODE,
            PDO::FETCH_ASSOC);
    }

    public function sqlForId($idToSearchFor) {
        $sql = $this->db->prepare('SELECT * FROM `users` WHERE id=' . $idToSearchFor . ';');
        $sql->execute();
        $results = $sql->fetch();
        var_dump($results);
    }
}

$findId = new DbEntity('users');
$findId->sqlForId('24');
