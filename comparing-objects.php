<?php

class Cow {

}

$wendy = new Cow();
$wilbur = new Cow();

if($wendy == $wilbur){
    echo '== thinks they are the same(Cows) <br>';
}

if($wendy === $wilbur){
    echo '=== thinks they are the same(Cows) <br>';
}

echo '<br/>';

class Ferret {
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

$will = new Ferret('William');
$ben = new Ferret('Benjamin');

if($will == $ben){
    echo '== thinks they are the same(Ferrets) <br>';
} else {
    echo 'NO!';
}

if($will === $ben){
    echo '=== thinks they are the same(Ferrets) <br>';
}

if($will instanceOf Ferret && $ben instanceof Ferret) {
    echo 'yes';
}