<?php

namespace Farmyard\Animal;

use PHPUnit\Framework\TestCase;

class CowTest extends TestCase
{
    public function testSpeak()
    {
        $cow = new Cow();
        $result = $cow->speak();
        $this->assertEquals($result, 'moo');
    }

}