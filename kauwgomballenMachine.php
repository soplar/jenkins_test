<?php
    class KauwgomballenMachine{
        private $kauwgomballen;

        // get aantal kauwgomballen in de machine
        public function getKauwgomballen(){
            return $this->kauwgomballen;
        }

        // set het aantal kauwgomballen in de machine
        public function setKauwgomballen($aantal){
            $this->kauwgomballen = $aantal;
        }

        // de gebruiker draait aan de machine en een kauwgombal valt er uit
        public function draaiMachine(){
            $this->setKauwgomballen($this->getKauwgomballen() - 2);
        }
    }
?>