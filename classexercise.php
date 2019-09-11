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



//Potential exercise solution

class Child {
    private $id;
    public $firstName;
    private $dob;
    private $db;

    public function __construct()
    {
        echo "Child object created! <br>";
    }

    public function setDb($db) {
        $this->db = $db;
    }

    public function __destruct()
    {
        $sql = 'UPDATE `children` SET `firstname` = ? AND `dob` = ? WHERE `id` = ?';
        $query = $this->db->prepare($sql);
        $query->execute([$this->firstname, $this->dob, $this->id]);
    }
}

$db = new PDO('mysql:host=127.0.0.1; dbname=firstDb', 'root');

$query= $db->prepare("SELECT `id`, `firstName`, `dob` FROM `children`;");
$query->setFetchMode(PDO::FETCH_CLASS, 'Child');
$query->execute();
$child = $query->fetch();

echo "Child's first name is: $value->firstName, and DOB is: $value->dob. <br>";

$child->firstname = 'Ruth';
$child->setDb($db);

unset($result); // check DB it should have changed to Ruth! = $result;
