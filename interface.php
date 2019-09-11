<?php

/*
 * interface's method's visibility should match with the class that implements this interface.
 * smaller and more moduler compared to abstract.
 *
 * you can first just write program in procedural way, and then refactor it later with abstract or interface.
 *
 * */


interface eat
{
    public function eatFood($food);
}

class Pig implements eat
{
    public function eatFood($food)
    {
        echo 'nom nom...' . $food;
    }
}

class Child implements eat
{
    public function eatFood($food)
    {
        echo 'munch munch..' . $food;
    }
}

$percy = new Pig();
$trevor = new Child();

$percy->eatFood('apples');
echo '<br/>';
$trevor->eatFood('carrot sticks');