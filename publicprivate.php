<?php
#   Visibility

#   public : anything can see or change the property, can be accessed anywhere
#   private : can only be read or written to in the current class, not in any parent or child
//            can only be accessed in the class that defines it.
#   protected : can only be read or written to in the current or child class
//              can only be accessed in the class that defines it, current and inheriting classes.

//Methods - some but 'where they can be called from'

class MyClass
{
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}

$obj = new MyClass();
echo $obj->public;
//echo $obj->protected;
//echo $obj->private;
//$obj->printHello();

/**
 * Define MyClass2
 */
class MyClass2 extends MyClass
{
    // We can redeclare the public and protected properties, but not private
    public $public = 'Public2';
    protected $protected = 'Protected2';

    function printHello()
    {
        echo $this->public;
        echo $this->protected;
//        echo $this->private;
    }
}

$obj2 = new MyClass2();
//echo $obj2->public; // Works
//echo $obj2->private; // Undefined
//echo $obj2->protected; // Fatal Error
//$obj2->printHello(); // Shows Public2, Protected2, Undefined