<?php

class Circle
{
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function area()
    {
        return pi() * pow($this->radius, 2);
    }
}

class Square
{
    public $length;

    public function __construct($length)
    {
        $this->length = $length;
    }

    public function area()
    {
        return pow($this->length, 2);
    }
}

class AreaCalculator
{

    protected $shapes;

    public function __construct($shapes = array())
    {
        $this->shapes = $shapes;
    }

    public function sum()
    {
        $area = [];
        foreach ($this->shapes as $shape) {
            $area[] = $shape->area();
        }

        return array_sum($area);
    }

    public function output()
    {
        $displayString = '<h2>Sum of the areas</h2>';
        $displayString .= '<p>' . $this->sum() . '</p>';
        return $displayString;
    }
}

$shapes = [
    new Circle(2),
    new Square(5),
    new Square(6)
];

$areas = new AreaCalculator($shapes);

echo $areas->output();




#   Open-closed principle with interface

interface ShapeInterface
{
    public function area();
}

class CircleTwo implements ShapeInterface
{
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function area()
    {
        return pi() * pow($this->radius, 2);
    }
}

class SquareTwo implements ShapeInterface
{
    public $length;

    public function __construct($length)
    {
        $this->length = $length;
    }

    public function area()
    {
        return pow($this->length, 2);
    }
}

class AreaCalculatorTwo
{

    protected $shapes;

    public function __construct($shapes = array())
    {
        $this->shapes = $shapes;
    }

    public function sum()
    {
        $area = [];
        foreach ($this->shapes as $shape) {
            if (is_a($shape, 'ShapeInterface')) {
                $area[] = $shape->area();
                continue;
            }
            throw new Exception();
        }

        return array_sum($area);
    }

    public function output()
    {
        $displayString = '<h2>Sum of the areas</h2>';
        $displayString .= '<p>' . $this->sum() . '</p>';
        return $displayString;
    }
}

$shapes = [
    new CircleTwo(2),
    new SquareTwo(5),
    new SquareTwo(6)
];

$areas = new AreaCalculatorTwo($shapes);

echo $areas->output();