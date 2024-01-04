<?php

class Pinigine {
    private $popieriniaiPinigai = 0;
    private $metaliniaiPinigai = 0;
    private $suma = 0;

    function ideti($kiekis) {
        if($kiekis <= 2) {
            $this->metaliniaiPinigai += $kiekis;
            echo "Metaliniai pinigai: $this->metaliniaiPinigai <br>";

        } if($kiekis > 2) {
            $this->popieriniaiPinigai += $kiekis;};
            echo "Popieriniai pinigai: $this->popieriniaiPinigai<br>";
            return;
            }


    function skaiciuoti() {
        $this->suma = $this->metaliniaiPinigai + $this->popieriniaiPinigai; 
        echo  "Viso pinigineje yra: $this->suma EUR <br>";
    }
}

?>