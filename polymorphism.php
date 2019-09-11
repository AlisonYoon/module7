<?php

interface speakingCreature
{
    public function speak();
}

class Pig implements speakingCreature
{
    public function speak()
    {
        echo 'oink';
    }
}

class Dog implements speakingCreature
{
    public function speak()
    {
        echo 'woof';
    }
}

function makeAnimalSpeak(speakingCreature $animal){   //interface name "speakingCreature" is used as type hint here
    $animal->speak();
}

$harryTrotter = new Pig();
$lassie = new Dog();

makeAnimalSpeak($lassie);
echo '<br/>';
makeAnimalSpeak($harryTrotter);

echo '<br/>';

function makeAnyAnimalSpeak($animal){
    if($animal instanceOf speakingCreature) {  //check if $animal is the instance of "speakingCreature" interface.
        $animal->speak();
    } else {
        echo 'shh, no talking';
    }
}

$harryTrotter = new Pig();
$lassie = new Dog();

makeAnyAnimalSpeak($lassie);
echo '<br/>';
makeAnyAnimalSpeak($harryTrotter);
echo '<br/>';
makeAnyAnimalSpeak('tortoise');