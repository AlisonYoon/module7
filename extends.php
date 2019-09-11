<?php

#   Extends : inheritance
//parent-child relationship (multi-level)
//everything(properties and methods) in the parent, the child can also do/has
//The child can have additional properties and methods
//You can only extend 1 class (1 parent only)

class Animal
{
    public function eat($food) {
        echo 'mmm...' . $food;
    }

}

class Pig extends Animal
{

}

$percy = new Pig();
$percy->eat('apple');

echo '<br/>';

class Human{

    public $greeting = 'hello';

    public function shout(){
        echo strtoupper($this->greeting);
    }
}

class Child extends Human {
}

$kid = new Child();

$kid->shout();