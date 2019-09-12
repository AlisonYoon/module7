<?php
require_once 'TypeOfAnimal.php';

class Horses extends TypeOfAnimal
{
    function horseEats(){
        $this->iEatThis('carrot');
    }
}