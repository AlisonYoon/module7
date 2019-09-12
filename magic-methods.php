<?php
#   __call()
class Jar {
}

$jeremy = new Jar();
//$jeremy->jump();


class JarJar {
    public function default()
    {
        //some default func
        echo 'that doesnt exist, silly you!';
    }

    public function __call($name, $arguments)
    {
        $this->default();
    }
}

$jilly = new JarJar();
$jilly->jump();

echo '<br/>';


class JarJarBinks {

    public function __call($name, $arguments)
    {
        echo $name . '<br>'; //name of method you tried to call
        echo implode(', ', $arguments); // array of arguments you tried to pass
    }
}

$gerald = new JarJarBinks();
$gerald->jump('carrot', 'peanut');


#   __toString()
class Hipster
{
    public $beans = 'yum';

    public function __toString()
    {
        return 'avocado on toast';
    }
}

$beardedGuy = new Hipster();
echo $beardedGuy;
echo strtoupper($beardedGuy->beans);

echo '<br/>';

class Jar
{
    public $contents = 'pickled beetroot';
    public $lid = 'tightly screwed on';

    public function __toString()
    {
        return json_encode($this);
    }
}

$lovelyJar = new Jar();
echo $lovelyJar;