<?php
$message = 'hello';

//Inherit message
$example = function () use ($message) {
    var_dump($message);
    echo '<br/>';
};
$example();

//inherited variable's value is from when the function
//is defined, not when called
$message = 'world';
$example();

//Closures can also accent regular arguments
$example = function ($arg) use ($message) {
    var_dump($arg . ' ' . $message);
    echo '<br>';
};

$message = 'fish';
$example("hello");

?>

