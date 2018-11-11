<?php
    require "KauwgomballenMachine.php";
    use PHPUnit\Framework\TestCase;

    class KauwgomballenMachineTest extends TestCase{
        public $kauwgomballenMachineInstantie;
        
        public function setUp(){
            $this->kauwgomballenMachineInstantie = new KauwgomballenMachine();
        }

        public function testOfMachineWerkt(){
            // we vullen de machine met honderder kauwgomballen
            $this->kauwgomballenMachineInstantie->setKauwgomballen(100);
            // een gebruiker haalt er eentje uit
            $this->kauwgomballenMachineInstantie->draaiMachine();
            // nu zouden er dus 99 in moeten zitten
            $this->assertEquals(99, $this->kauwgomballenMachineInstantie->getKauwgomballen());
        }
    }
?>