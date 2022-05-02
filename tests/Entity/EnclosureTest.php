<?php 

namespace Tests\Entity\Enclosure;

use PHPUnit\Framework\TestCase;
use App\Entity\Enclosure;
use App\Entity\Dinosaur;

class EnclosureTest extends TestCase
{
    public function testItHasNoDinosaursByDefault()
    {
        $enclosure = new Enclosure();
        $this->assertCount(0, $enclosure->getDinosaurs());
    }

    public function testItAddsDinosaurs()
    {
        $enclosure = new Enclosure();
        $this->markTestIncomplete('Waiting for confirmation from GenLab');
        //$enclosure->addDinosaur(new Dinosaur());
    }
}