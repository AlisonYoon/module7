<?php

use Farmyard\Animal\Cow;
use Farmyard\Butcher;

require_once __DIR__. '/vendor/autoload.php';

$daisy = new Cow();
echo $daisy->speak();

echo "<br>";

$meat = new Butcher\Cow();
$meat->meat();

echo __NAMESPACE__;

#   aliasing
/*
use Farmyard\Animal as Field;
use Farmyard\Butcher as Shop;

$daisy = new Field\Cow();
$meat = new Shop\Cow();
 *
 * */