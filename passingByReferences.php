<?php
//not passing by ref
$person1 = 'Kylie';

function likesMangos ($name) {
    $name .= ' likes mangos';
    return $name;
}

$awesome1 = likesMangos($person1);
echo $person1;
echo $awesome1;


//passing by ref
echo '<br/>';

$person2 = 'Kyle';

function likesStrawberries (&$name) {
    $name .= ' likes strawberries';
    return $name;
}

$awesome2 = likesStrawberries($person2);
echo $person2;
echo $awesome2;

