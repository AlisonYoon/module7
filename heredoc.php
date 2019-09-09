<?php

$vegetable = 'carrot';

//heredoc  : don't really use it much, you might see it.
$str = <<<EDO
Whatever
you want to 
write.
Including \
and cariable interpolation: $vegetable
EDO;

echo $str;
