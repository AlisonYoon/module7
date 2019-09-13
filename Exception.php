<?php

try {
    //some code
} catch (Exception $e) {
    echo $e->getMessage();
    //some code if the above code errors
}

try {
    //db query
} catch (Exception $e) {
    if($e->getMessage() == 'no database'){
        echo 'get an admin, cause the db is broken';
    }
    //some code if the above code errors
}