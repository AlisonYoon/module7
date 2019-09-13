<?php


namespace Farmyard\Farm;

use Farmyard\Animal\Cow;


class Barn
{
    public $cow;

    public function __construct(Cow $cow)
    {
        $this->cow = $cow;
    }

    public function makeCowSpeak()
    {
        return $this->cow->speak();
    }
}