<?php
/*
 * inside abstract function, you can have abstract method. This method cannot have anything inside, but it says that
 * any child that extends this abstract function MUST have this abstract method, and it what it does can be defined in that child's abstract method.
 * Each child can make their abstract method does different thing.
 * Visibility should be the same. If abstract's abstract method was public, should be the same in the child that extends this abstract class.
 *
 * */

abstract class Animal
{
//does generic animal stuff and has generic animal properties
    public function eat($food) {
        echo 'mmm...' . $food;
    }
}

class Pig extends Animal
{

}

$kevinBacon = new Pig();
$kevinBacon->eat('apple');
//$animal = new Animal();
//$animal->eat('orange');


abstract class Human
{
    public abstract function shout();
}

class Child extends Human
{
    public function shout()
    {
        echo 'Yo!';
    }
}

$kid = new Child();
$kid->shout();