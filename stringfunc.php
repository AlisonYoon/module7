<?php

#   substr(string $string, int $start, [int $length]):string ;
//It returns a part of the string
//if $start is positive, it starts from the beginning
//if $start is negative, it starts from the end and to the front
//if $start > length of the string   -> it returns FALSE
//$length is optional. If you don't give anything, it will go to the end.
//if $length is positive it goes -> this way
//if $length is negative, then that many characters will be omitted from the end of string
//if $length == 0, it returns FALSE

echo '1) ' . substr('abcdef', 1);
echo '<br/>';
echo '2) ' . substr('abcdef', 1, 3);
echo '<br/>';
echo '3) ' . substr('abcdef', 0, 4);
echo '<br/>';
echo '4) ' . substr('abcdef', 0, 8);
echo '<br/>';
echo '5) ' . substr('abcdef', -1, 1);
echo '<br/>';
echo '6) ' . substr("abcdef", 0, -1);
echo '<br/>';
echo '7) ' . substr("abcdef", 2, -1);
echo '<br/>';
echo '8) ' . substr("abcdef", 4, -4);
echo '<br/>';
echo '9) ' . substr("abcdef", -3, -1);

#   trim()
//It trims white whitespace from beginning and end.  trim(string $string, character mask)

#   ltrim()
// starts from left ->

#   rtrim()
// starts from right <-

#   str_shuffle()
//for example, str_shuffle('music') ->  'cusim"

#   explode(string $delimiter, string $string): array
//splits the string, returns them as an array

#   implode(string $glue, array $pieces): string
//stick things in array, returns it as a string

$pizza = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
var_dump($pieces);

echo '<br/><br/>';

$array = array('lastname', 'email', 'phone');
$comma_separated = implode(",", $array);

echo $comma_separated;

#   htmlentities()
//It prints HTML elements as is.
$str = "A 'quote' is <b>bold</b>";
echo $str;
echo '<br/>';
// Outputs: A 'quote' is &lt;b&gt;bold&lt;/b&gt;
echo htmlentities($str);

#   htmlspecialchars()
//Convert special characters to HTML entities

#   html_entity_decode()
//Convert HTML entities to their corresponding characters

#   strpos(string $haystack, $needle[, int $offset = 0 ]): int
//find where's $needle in $haystack string. If it doesn't find it, returns FALSE
//if offset is set, search will start this number of characters counted from the beginning of the string.
echo '<br/>';
$mystring = 'abcdeafg023';
$findme = 'a';
$position = strpos($mystring, $findme);
echo '<br/>';
var_dump($position);