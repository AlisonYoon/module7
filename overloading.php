<?php

#   overloading : you give something to a class more than what it's defined in the first place
class Jar {

}

$glassJar = new Jar();
$glassJar->contents = 'gherkins';  // contents didn't exist in the class and your'e "overloading" it after the class is defined.

echo $glassJar->contents;

//overloading is normally not acceptable except for when you use database and want to assign data into it.