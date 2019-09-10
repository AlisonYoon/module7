<?php
//old style
$array = array(1, 2, 5);

//numeric
$numericArray1 = [1, 2, 3, 4];
//var_dump($numericArray1);

$numericArray2 = [
    'carrot',
    2,
    3,
    'apple'
];
//var_dump($numericArray2);

//associative
$assocArray1 = ["key" => "value"];
//var_dump($assocArray1);

$assocArray2 = ['Bath' => 'UK', 'Paris' => 'France'];
//var_dump($assocArray2);

$mixedArray = ['carrot', 17 => 'aubergine', 'courgette'];
//var_dump($mixedArray);

$multiDimensionalArray = [
    "key" => "value",
    [],
    [
        'carrot',
        'aubergine'
    ]
];
//var_dump($multiDimensionalArray);


#Array functions
//is_array()  -> returns true or false.
//count()     -> returns int (how many items the array holds)
    #count(array, true/false) default is "false". if it's set to true, count all values on all levels
$count = [1, 2, 3, [1,2,3]];

    echo 'count($count):' . count($count); //4
    echo '<br/>';
    echo 'count($count, FALSE):' . count($count, FALSE); //4
    echo '<br/>';
    echo 'count($count, TRUE):' . count($count, TRUE); //6


//in_array(needle, haystack, [strict])
//-> returns boolean. [strict] is an optional param(true or false: default is false. strictly typed or not.). needle is WHAT you are looking for, haystack is WHERE you are looking for.
//-> in multidimensional array, it just looks for it in the first level

//array-diff(array1, array2, [more arrays])    ->takes 2 arrays, [more arrays] is optional.
//-> returns an array of things that are in array1 and not in the rest. In an associative array, only interested in values not key

//array_rand(array, int)          -> returns a random 'key' from the array. second param int is an optional: how many random things you want.

//array_key_exists(key, array)    -> returns boolean. Looks for a key in the array tells you if it exist or not. Look for only in first dimension.

//array_merge(array1, [array2, array3...])    -> returns an array
//for same string keys, it will overwrites values(later array will overwrites first array's values for same keys)
//for numeric keys, it does not overwrite, renumbers the index.

$arraymerge = ['aubergine', 'courgette', 'tomato', 'leek', '4'];

var_dump(in_array('tomato', $arraymerge));
echo '<br/>';
var_dump(in_array(4, $arraymerge));
echo '<br/>';
var_dump(in_array(4, $arraymerge, true));
echo '<br/>';

$multidimensionalArray = [1, 2, [1, 2, 3]];
var_dump(in_array(3, $multidimensionalArray));


$alice = [
    "name" => "Alice",
    "favColour" => "blue",
    "favVegetable" => "Carrot"
];
$bob = [
    "name" => "Bob",
    "favColour" => "green",
    "favCar" => "Ferrari"
];
var_dump(array_merge($alice, $bob));

echo '<br/>';

$firstSet = [2, 7, 9];
$secondSet = [11, 14, 53];
var_dump(array_merge($firstSet, $secondSet));

//array_walk(array, callback, [extra param])    -> returns boolean. It goes through an array and change each one. [extra param] is an optional
//if you want array_walk() to change a value in the array, use &.
/*
 * function(doThing(&$value, $key)
 * {
 * echo $key . ':' . $value . '<br>';
 * $value = $value . 'green';
 * }
 *
 * array_walk($arraywalk, 'doThing')
 * -> now favColor's value will be 'bluegreen'
 *
 * */
$arraywalk = [
    "name" => "Ruth",
    "favColor" => "blue",
    "favBegetable" => "Aubergine"
];

function doThing($value, $key)
{
    echo $key . ' : ' . $value .  '<br>';
}
$la = array_walk($arraywalk, 'doThing');
//var_dump($la)    -> returns true.

/*
 * This foreach is same as above array_walk($arraywalk, 'doThing');
 * BUT, with array_walk, you can actually change the value of the original array.
 * with foreach, it just prints it out.
 *
foreach doThing($array as $key=>$value) {
    echo $key . ' : ' . $value .  '<br>';
}
*/

//array_map(callback, array1, [array2, ...])    -> returns an (brand new)array. It does something to values only if you're using associative array.
$arraymap = [1,3,6,3];

function addTen($value){
    return $value + 10;
}

$result = array_map('addTen', $arraymap);
var_dump($result);
echo '<br/>';

//array_filter(array, callback, [flag])    -> takes an array, callback has to return a bool. callback is the condition that says should it keep something or not. [flag] is optional:Default is "value".
// -> returns a brand new array
//flags: ARRAY_FILTER_USE_KEY  :pass key.
//       ARRAY_FILTER_USE_BOTH :pass key and value.
