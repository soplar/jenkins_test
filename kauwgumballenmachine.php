<?php
    class KauwgumballenMachine{
        private $kauwgumballen;

        // get aantal kauwgumballen in de machine
        public function getKauwgumballen(){
            return $this->$kauwgumballen;
        }

        // set het aantal kauwgumballen in de machine
        public function setKauwgumballen($aantal){
            $this->$kauwgumballen = $aantal;
        }

        // de gebruiker draait aan de machine en een kauwgumbal valt er uit
        public function draaiMachine(){
            $this->setKauwgumballen($this->getKauwgumballen() - 1);
        }
    }
?>