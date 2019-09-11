<?php

#   Create a DB entity class with autosave

class UserEntity {
    private $db;
    public $name;
    public $email;
    public $id;
    public  $newEmail;

    public function __construct($dbname) {
        $this->db = new PDO('mysql:host=192.168.20.20; dbname=' . $dbname, 'root', '');
        $this->db->setAttribute(
            PDO::ATTR_DEFAULT_FETCH_MODE,
            PDO::FETCH_ASSOC);
    }

    public function setEmail($newEmail) {
        $this->newEmail = $newEmail;
    }

    public function sqlForId($idToSearchFor) {
        $sql = $this->db->prepare('SELECT * FROM `users` WHERE id=' . $idToSearchFor . ';');
        $sql->execute();
        $results = $sql->fetch();
        //var_dump($results);
        $this->name = $results["name"];
        $this->email = $results["email"];
        $this->id = $results["id"];
    }

    public function __destruct()
    {
        $sql = $this->db->prepare('UPDATE `users` SET `email` =? WHERE `id` =?;');
        $sql->execute([$this->newEmail, $this->id]);
        echo ($this->newEmail);
    }
}

//$findId = new UserEntity('users');
//$findId->sqlForId('2');

$Gilles = new UserEntity('users');
$Gilles->sqlForId('2');
//echo($Gilles->email);
//echo "<br>";
//echo($Gilles->name);
//$Gilles->email = 'carrot@carrot.com';
echo "<br>";
echo($Gilles->email);
echo "<br>";
$Gilles->setEmail('onion@carrot.com');
unset($Gilles);


