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