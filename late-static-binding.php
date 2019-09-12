<?php

//class One {
//    public static $name = 'Gertrude';
//}
//
//class Two {
//    public $name = 'Gertrude';
//}
//
//echo One::$name; //Gertrude
//
//echo '<br/>';
//
//$person = new Two();
//echo $person->name;//Gertrude
//
//
//echo '<br/>';

class Ferret {
    public static function whatClassIsThis(){
        echo 'ferret';
    }

    static function testUsingSelf(){
        self::whatClassIsThis();
    }

    static function testUsingStatic(){
        //like self but using late static binding allows
        //you to dynamically bind static entities at runtime
        static::whatClassIsThis();
    }
}

class BlackSable extends Ferret {
    public static function whatClassIsThis(){
        echo 'black sable';
    }
}

Ferret::whatClassIsThis();
echo '<br/>';
Ferret::testUsingSelf();
echo '<br/>';
Ferret::testUsingStatic();
echo '<br/>';

BlackSable::whatClassIsThis();
echo '<br/>';
BlackSable::testUsingSelf();
echo '<br/>';
BlackSable::testUsingStatic();