<?php

namespace Tests\Factory;

use PHPUnit\Framework\TestCase;
use App\Factory\DinosaurFactory;
use Exception;
use Throwable;

class DinosaurFactoryTest extends TestCase
{

    /**
     * @var DinosaurFacory
     */
    private $factory;

    // Called before each test method
    // Create a new fresh DinosaurFactory object for every test 
    public function setUp(): void
    {
        $this->factory = new DinosaurFactory;
    }

    // Called once per test
    // Called after the test is executed
    public function tearDown(): void
    {

    }

    // Called once for the entire class
    // Not common
    public static function setUpBeforeClass(): void
    {
        
    }

    // Called once for the entire class
    // Not common
    public static function tearDownAfterClass(): void
    {
        
    }
    // Called when a test method did not execute succesfully.
    protected function onNotSuccessfulTest(Throwable $t): void
    {
        fwrite(STDOUT, __METHOD__ . "\n");
        throw $t;
    }

    public function testItGrowsAVelociraptor()
    {
        $dinosaur = $this->factory->growVelociraptor(5);
        $this->assertIsString($dinosaur->getGenus());
        $this->assertSame('Velociraptor', $dinosaur->getGenus());
        $this->assertTrue($dinosaur->isCarnivorous());
        $this->assertSame(5, $dinosaur->getLength());
    }

    public function testItGrowsATriceratops()
    {
        // A clear marker to remind us that we have work to do!
        $this->markTestIncomplete('Waiting for confirmation from GenLab');
    }

    public function testItGrowsABabyVelociraptor()
    {
        if(!class_exists('Nanny')){
            $this->markTestSkipped('There is nobody to watch the baby raptor!');
        }
        
        $dinosaur  = $this->facrory->growVelociraptor(1);
        $this->assertSame(1, $dinosaur->getLength());
    }
}