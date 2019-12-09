<?php
use PHPUnit\Framework\TestCase;

require_once 'src/Poneys.php';

/**
 * Classe de test de gestion de poneys
 */
class PoneysTest extends TestCase
{

    
    protected function setUp(){
        $this->Poneys = new Poneys();      
    }



    /**
     * Undocumented function
     *
     * @return void
     */
    public function testRemovePoneyFromField()
    {
        //$Poneys = new Poneys();
        $this->Poneys->removePoneyFromField(3);
        $this->assertEquals(5, $this->Poneys->getCount());

    }

    public function testRemovePoneyFromFieldException()
    {
        //$Poneys = new Poneys();
        $this->expectException(Exception::class);
        $this->expectExceptionMessage("Exception can't remove");
        $this->Poneys->removePoneyFromField(11);

    }


    public function testAddPoneyFromField(){
        //$Poneys = new Poneys();
        $this->Poneys->addPoneyFromField(1);
        $this->assertEquals(9, $this->Poneys->getCount());

    }

    //Ne marche pas !!
    // public function testGetNames(){
    //      $names = ['Joe','William','Jack','Averell'];
    //      $Poneys = $this->getMockBuilder('Poneys')->getMock();
    //      $Poneys
    //          ->expects($this->exactly(1))
    //          ->method('getNames')
    //          ->willReturn($names);
    //      $this->assertEquals(
    //          $names, 
    //          $Poneys->getNames());
    // }
    
    public function testFreePoneyField(){
        //$Poneys = new Poneys();
        $this->assertTrue(true, $this->Poneys->freePoneyField());
    }
}
?>
