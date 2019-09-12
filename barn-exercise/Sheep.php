<?php
require_once 'TypeOfAnimal.php';

class Sheep extends TypeOfAnimal
{
    function sheepEats(){
        $this->iEatThis('grass');
    }
}