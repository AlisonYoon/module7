<?php

trait SayHello
{
    private $greeting = 'Lovely to see you!';

    public function sayHello()
    {
        echo $this->greeting . 'Hello!';
    }
}

class Person
{
    use SayHello;

    public $name = 'brian';

    public function useGreeting() {
        echo $this->greeting;
    }
}

$russell = new Person();
$russell->sayHello();
echo '<br/>';

$russell->useGreeting();

echo '<br/>';

//echo $russell->greeting;