<?php
/*
 * [EXERCISE]:
-> Write a PHP Script that can match the following patterns
- An email address
- UK postcode
- The amount of occurrences of 'cat' in the following text
Cat ipsum dolor sit amet, bird bird bird bird bird bird human why take bird out i could have eaten that. Scream at teh bath intrigued by the shower, and run outside as soon as door open run in circles i like frogs and 0 gravity. Eats owners hair then claws head paw at beetle and eat it before it gets away, so purr as loud as possible, be the most annoying cat that you can, and, knock everything off the table pee in the shoe. Hack all of a sudden cat goes crazy.  Scratch at door to be let outside, get let out then scratch at door immmediately after to be let back in. Don't wait for the storm to pass, dance in the rain mark territory howl uncontrollably for no reason or try to jump onto window and fall while scratching at wall, but then cats take over the world, look at dog hiiiiiisssss. Love hide from vacuum cleaner or climb leg.
-> Write a PHP script that changes the birds to dolphins, frogs to chickens and cats to dogs
-> Write a PHP script that gives you just the punctuation from a string.

*/
//email address regex
'/[A-z]+|[0-9]*|[\_\-]*@{1}[a-z]+\.{1}[a-z]+/g';

//a English postcode
'/([A-z]{1}|[A-Z]{2})([0-9]{1}|[0-9]{2})\s[0-9]{1}[A-Z]{2}/gi';

var_dump(preg_match_all('/[A-z]+|[0-9]*|[\_\-]*@{1}[a-z]+\.{1}[a-z]+/', 'adsf_sdf45@gmail.com'));

echo "<br>";

var_dump(preg_match_all('/([A-Z]{1}|[A-Z]{2})([0-9]{1}|[0-9]{2})\s[0-9]{1}[A-Z]{2}/', 'BS6 6DW'));

//amount of occurrences of 'cat'
'/cat/';
echo "<br>";
var_dump(preg_match_all('/cat/i', 'Cat ipsum dolor sit amet, bird bird bird bird bird bird human why take bird out i could have eaten that. Scream at teh bath intrigued by the shower, and run outside as soon as door open run in circles i like frogs and 0 gravity. Eats owners hair then claws head paw at beetle and eat it before it gets away, so purr as loud as possible, be the most annoying cat that you can, and, knock everything off the table pee in the shoe. Hack all of a sudden cat goes crazy.  Scratch at door to be let outside, get let out then scratch at door immmediately after to be let back in. Don\'t wait for the storm to pass, dance in the rain mark territory howl uncontrollably for no reason or try to jump onto window and fall while scratching at wall, but then cats take over the world, look at dog hiiiiiisssss. Love hide from vacuum cleaner or climb leg.
'));