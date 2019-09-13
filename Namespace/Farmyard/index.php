<?php

use Farmyard\Animal\Cow;

require_once __DIR__. '/vendor/autoload.php';

use Farmyard\Butcher;

$daisy = new Cow();
$daisy->speak();

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