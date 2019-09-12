<?php

class Cow {
    public $name;
}

$millie = new Cow();
$millie->name = 'Millicent';

$marge = $millie;
echo $marge->name;
echo '<br/>';
$marge->name = 'Marjorie';
echo $marge->name;
echo '<br/>';
echo $millie->name;   // you're not only changing $marge's name but also $millie's name here.

echo '<br/>';
echo '<br/>';

$carrot = 'Doris';
$string2 = $carrot;
$string2 = 'Dominic';  // with string, $carrot's value is still the same even if $string2's value is changed.
echo $carrot;

echo '<br/><br/>';


#   Clone part1

$bob = new Cow();
$bob->name = 'Robert';

$will = clone $bob;
echo $will->name;
echo '<br/>';

$will->name = 'William';

echo $will->name;
echo '<br/>';
echo $bob->name;    //$will was created with "clone" keyword, so $will's new name value wouldn't affect $bob's name value.

echo '<br/><br/>';



#   Clone part2

class Lamb {
    public $favouriteGrassStrands = [7,4];
    public $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class Sheep {
    public $name;
    public $favouriteFences = [8,3];
    public $lamb;

    public function __clone()   //magic method __clone()
    {
        echo 'sheep has been cloned <br>';
    }
}

$polly = new Sheep();
$polly->name = 'Polly';
$polly->lamb = new Lamb('larry');

var_dump($polly);
echo '<br><br/>';

$dolly = clone $polly;
$dolly->name = 'Dolly';
$dolly->lamb->name = 'barry';

var_dump($polly);
echo '<br><br/>';
var_dump($dolly);