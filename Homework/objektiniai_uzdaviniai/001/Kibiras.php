<?php

class Kibiras {

    private $akmenuKiekis = 0;

    function prideti1Akmeni() {
        $this->akmenuKiekis = $this->akmenuKiekis + 1;
       
    }
    function pridetiDaugAkmenu($vnt) {
        $this->akmenuKiekis = $this->akmenuKiekis + $vnt;
        
    }
    function kiekPririnktaAkmenu() {
        echo  "Akmenu kibire yra: $this->akmenuKiekis <br>";
    }
    }
 
?>