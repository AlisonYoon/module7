<?php
//you can use setter or getter to access/assign private properties inside a class.

class Jellyfish
{
    private $name;

    public function setName($name)
    {
        if (empty($this->name)) {
            $this->name = $name;
        }
    }

    public function getName()
    {
        return $this->name;
    }
}

$squiddlyDiddly = new Jellyfish();
$squiddlyDiddly->setName('Ben');
$squiddlyDiddly->setName('Bill');
echo $squiddlyDiddly->getName();

echo '<br/>';

//$squiddlyDiddly->name = 'Bruce';