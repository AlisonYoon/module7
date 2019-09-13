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



#   throw Exception yourself
try {
    $myVar = 'a';
    if($myVar == 'a'){
        throw new Exception('some message here');
    }
    echo 'hello';
} catch (Exception $e) {
    echo $e->getMessage();
}



#   it's literally like throwing and catching a ball
try {
    try {
        $myVar = 'a';
        if ($myVar == 'a') {
            throw new Exception('some message here');
        }
        echo 'hello';
    } catch (Exception $e) {
        echo $e->getMessage();
        throw new $e;     //after echoing, throwing a new error
    }
} catch (Exception $exception) {
    echo 'did I get here?'; //so it got here.
}


#   finally
try {
    $myVar = 'b';
    if($myVar == 'a'){
        throw new Exception('some message here');
    }
    echo 'hello';
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    echo '<br>this is from the finally block';
}


#   Custom exception by extending "extends Exception"
class RuthsCustomError extends Exception {

}

try {

    if(true){
//        throw new RuthsCustomError('this is a custom error');
        throw new Exception('generic exception');
    }
    echo 'hello';
} catch (RuthsCustomError $e){
    echo $e->getMessage();
} catch (Exception $e) {
    echo $e->getMessage();
}
//} finally {
//    echo '<br>this is from the finally block';
//}