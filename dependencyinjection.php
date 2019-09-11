<?php

#   ex1 - NOT using Dependency Injection.
class Jar
{
    public $contents;

    public function __construct($contents)
    {
        $this->contents = $contents;
    }
}

class Cupboard
{
    public $jar;

    public function __construct($contents)
    {
        $this->jar = new Jar($contents);  //if you do this, class Cupboard is dependent on class Jar. It is NOT independent.
    }
}

new Cupboard('pickles');



#   ex2 - Using Dependency Injection
interface Cupboardable
{
}

class JarTwo implements Cupboardable
{
    public $contents;

    public function __construct($contents)
    {
        $this->contents = $contents;
    }
}

class TobyJug implements Cupboardable
{
    public $contents;

    public function __construct($contents)
    {
        $this->contents = $contents;
    }
}

class CupboardTwo
{
    public $contents;

    public function __construct(Cupboardable $contents)
    {
        $this->contents = $contents;
    }
}

$jarOfPickles = new JarTwo('pickles');
$tobyJug = new TobyJug('werthers originals');
new CupboardTwo($tobyJug);