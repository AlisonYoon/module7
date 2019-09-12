<?php

//constance : if you wanna keep using it multiple times, make constance.
//ie. use it for DB connection.
//you can specify the visibility of class constance. if it's not specified, default is "public".
//class constance can be used without any object instantiated.


class Vegetable {
    const BAR = 'jelly';

    public function getBAR()
    {
        return self::BAR;
    }
}

$test = new Vegetable();
echo $test->getBAR();


class Foo {
    const BAR = 'jelly';
    const FRUIT = 'lemon';  // can have more than 1 constance in a class

    public function getBAR()
    {

        return self::BAR;
    }
}

echo Foo::BAR;  // you can access class Foo's constance without instantiating it.
echo '<br/>';
echo Foo::FRUIT;
echo '<br/>';

echo Foo::class;

echo '<br/>';

define('LION', 'raaaa');  // Global constance 'raaaa' is the value of 'LION' global constance
echo LION;