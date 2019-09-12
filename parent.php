<?php

class Mother {
    function sing() {
        echo "Twinkle twinkle little star,<br />\n";
    }
}

class Daughter extends Mother {
    function sing() {
        parent::sing();
        echo "How I wonder what you are.<br />\n";
    }
}

$rosemary = new Daughter();
$rosemary->sing();  //Twinkle twinkle little star,
                    //How I wonder what you are.