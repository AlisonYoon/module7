<?php
require_once 'TypeOfAnimal.php';


class Cows extends TypeOfAnimal
{
    function cowEats(){
        $this->iEatThis('hay');
    }
}
