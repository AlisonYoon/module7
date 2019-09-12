<?php
//final keyword in method

class BaseClass    //if you write "final class BaseClass", the ChildClass below cannot extend it.
{
    public function test()
    {
        echo "BaseClass::test() called\n";
    }

    final public function moreTesting()
    {
        echo "BaseClass::moreTesting() called\n";
    }
}

class ChildClass extends BaseClass
{
    public function moreTesting()
    {
        echo "ChildClass::moreTesting() called\n";
    }
}


//final keyword in class
final class BaseClass
{
    public function test()
    {
        echo "BaseClass::test() called\n";
    }

    final public function moreTesting()
    {
        echo "BaseClass::moreTesting() called\n";
    }
}

class ChildClass extends BaseClass  // can't do this.
{
//    public function moreTesting()
//    {
//        echo "ChildClass::moreTesting() called\n";
//    }
}
