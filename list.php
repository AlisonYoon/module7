<?php

#   list() is a language construct. not a function. Assign variables as if they were an array
//list($variable1, $variable2, ...) :array

$info = ['coffee', 'brown', 'caffeine'];

// Listing all the variables
list($drink, $color, $power) = $info;
echo "$drink is $color and $power makes it special.";
//print "coffee is brown and caffeine makes it special."
echo '<br/>';

$info = ['coffee', 'brown', 'caffeine'];

// Listing some of them
list($drink, , $power) = $info;
echo "$drink has $power.";
//print "coffee has caffeine"