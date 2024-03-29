<?php

class Circle
{
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }
}

class Square
{
    public $length;

    public function __construct($length)
    {
        $this->length = $length;
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
            if (is_a($shape, 'Square')) {
                $area[] = pow($shape->length, 2);
            } else {
                if (is_a($shape, 'Circle')) {
                    $area[] = pi() * pow($shape->radius, 2);
                }
            }
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

$output = new SumCalculatorOutputter($areas);

echo $output->JSON();
echo $output->HTML();