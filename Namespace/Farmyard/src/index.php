<?php

use Farmyard\Animal;

use Farmyard\Butcher;

$daisy = new Animal\Cow();

$meat = new Butcher\Cow();

echo __NAMESPACE__;

#   aliasing
/*
use Farmyard\Animal as Field;
use Farmyard\Butcher as Shop;

$daisy = new Field\Cow();
$meat = new Shop\Cow();
 *
 * */