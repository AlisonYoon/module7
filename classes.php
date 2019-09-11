<?php

#   classes : specification for what an object will look like.
//object instantiation - make one of those.
//creation of an object of a certain class
//can create may objects of the same class

class ClassName{}   // class
$newobject = new ClassName();  // instantiation

class Jellyfish {
    public $name;
    public $age;
}

$squiddlyDiddly = new Jellyfish();
$squiddlyDiddly->name = 'Ben';
$squiddlyDiddly->age = 3;

echo $squiddlyDiddly->name;
echo '<br/>';
echo $squiddlyDiddly->age;


#   object  (ie. remote control)
//has stuff properties, store data  (remote control has buttons, battery...)
//can do stuff, methods, functions  (you can turn on/off TV with it...)
//it is data type


#   instantiation : makes one of those(objects)
//makes an object of a certain class


#   property
//value, variable on an object, how data is kept on an object


#   method
//function on an object
//stuff that object/class can do

class JellyfishTwo {
    public $name;

    function swim(){
        return $this->name . ' is swimming...';
    }


}

$squiddlyDiddly = new JellyfishTwo();
$squiddlyDiddly->name = 'Ben';
echo '<br/>';
echo $squiddlyDiddly->swim();


#   object accessor   : ->  single arrow
//access properties and methods of an object