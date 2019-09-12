<?php

/*
 * 	Adapter pattern
	-good for using libraries
	-fixes non polymorphic classes

 * */

class Animal {
}

class Sheep extends Animal {
    public function speak()
    {
        echo 'baa';
    }
}

class Cow extends Animal {
    public function makeNoise()
    {
        echo 'mooo';
    }
}

function makeAnimalSpeak(Animal $animal){
    $animal->speak();
}

//$daisy = new Cow();
//makeAnimalSpeak($daisy);//error

////adaptor pattern would do this:
//
class CowSpeakAdapter extends Cow {
    public function speak()
    {
        parent::makeNoise();
    }
}

$derek = new CowSpeakAdapter();
makeAnimalSpeak($derek); //moo