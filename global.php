<?php
////No worky
//$foo = 'thing';
//
//function test(){
//    echo $foo;
//}
//
//test();

//Pass in?
$foo = 'thing';

function test(string $bar){
    echo $bar;
}

test($foo);

//global?
$foo = 'thing';

function test(){
    global $foo;
    $foo = 'courgette';
    echo $foo;
}
test();

echo '<br/>';
echo $foo;


#   $GLOBAL
$foo = 'thing';

function test(){
    echo $GLOBALS['foo'];
    $vegetable = 'carrot';
}
test();

echo '<br/>';
var_dump($GLOBALS);