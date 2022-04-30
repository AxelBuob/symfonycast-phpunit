<?php

namespace Tests\Factory;

use PHPUnit\Framework\TestCase;
use App\Factory\DinosaurFactory;

class DinosaurFactoryTest extends TestCase
{
    public function testItGrowsAVelociraptor()
    {
        $factory = new DinosaurFactory();
        $dinosaur = $factory->growVelociraptor(5);
        $this->assertIsString($dinosaur->getGenus());
        $this->assertSame('Velociraptor', $dinosaur->getGenus());
        $this->assertTrue($dinosaur->isCarnivorous());
        $this->assertSame(5, $dinosaur->getLength());
    }
}