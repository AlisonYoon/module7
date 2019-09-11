<?php
#   __construct() : one of the magic methods.
//with constructor, you can pass in parameters into class.
//you can set up a connection with DB. (it's a common use for constructor)
//use it for things you need from the beginning when you instantiate a class.
//usually put constructor under the properties.

class Circle {
    public $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }
}

class CircleTwo {
    public $radius;
    public $name;

    public function __construct($radius, $colour) {
        $this->radius = $radius;
        $this->name = 'Brian ' . $colour;
    }
}

$redCircle = new CircleTwo(4, 'red');
echo $redCircle->radius;

echo $redCircle->name;