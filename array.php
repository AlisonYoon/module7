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