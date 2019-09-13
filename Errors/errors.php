<?php

#   E_PARSE
try {
    ech 'hello';
} catch (Exception $e) {
    echo $e->getMessage();
}

echo '<br/>';
echo 'chocolate mousse';

#   E_NOTICE
$arr = [];
echo $arr['name'];

echo '<br/>';
echo 'chocolate mousse';

