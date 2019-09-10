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

//use array_map and anonymouse function together
$array = ['first' => 1,3,6,3,14];

function addTen($value){
    return $value + 10;
}

$result = array_map('addTen', $array);

var_dump($result);
echo '<br/>';

$resultWithAnonymousFunction = array_map(
    function ($value) {
        return $value + 10;
    }, $array);

var_dump($resultWithAnonymousFunction);

?>

