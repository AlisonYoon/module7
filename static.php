<?php

#   static method : can be used without any object instantiated. It's much faster(it uses less memory because it doesn't have to be instantiated)
// if the object is not instantiated, so you cannot use anything in the object.
// php has "parse time". when php runs, "static" will run first. PHP will find "static" first.
// you cannot use $this inside of static method (because $this doesn't make sense inside static, it refers to what the class has but nothing is instantiated)
// use self::staticMethod()
// you can use class constance within static method because class constance can be used without instantiation as well.
// static can be used both for method or property


class Carrot
{

    public static function print()
    {
        echo 'orange carrot';
    }
}

Carrot::print();
$ben = new Carrot();

class Courgette
{
    public $label = 'green courgette';

    public static function print()
    {
        return $this->label;
    }
}

Courgette::print(); //error

class Aubergine
{
    const LABEL = 'purple aubergine';

    public static function print()
    {
        return self::LABEL;
    }
}

echo Aubergine::print();


class Calculator
{

    private static function square($number)
    {
        return $number * $number;
    }

    public static function cube($number) {
        return self::square($number) * $number;
    }

}
//echo Calculator::square(6);
//$calculator = new Calculator();
//echo $calculator->cube(6);
echo Calculator::cube(8);




#   when extends parent class and access parent's static method from the child class

class Father
{
    const GREETING = 'good day';

    public static function greet()
    {
        return self::GREETING;
    }
}

class Son extends Father
{
    const GREETING = 'yo, what is up';

    public static function sonGreeting()
    {
        return parent::GREETING;  // it prints out "good day"
//        return self::GREETING;
    }
}

echo Son::sonGreeting();





#   different ways to call static property

class Vegetable
{
    public static $veggie = 'potato';

    public function staticValue()
    {
        return self::$veggie;
    }
}

class Chip extends Vegetable
{
    public function fooStatic()
    {
        return parent::$veggie;
    }
}

print Vegetable::$veggie;
echo '<br/>';

$dinner = new Vegetable();
print $dinner->staticValue();
echo '<br/>';
//print $dinner->veggie;
echo '<br/>';
print $dinner::$veggie;
echo '<br/>';

echo Vegetable::$veggie;

$classname = 'Vegetable';
print $classname::$veggie;
echo '<br/>';

print Chip::$veggie;
echo '<br/>';

$lunch = new Chip();
print $lunch->fooStatic();