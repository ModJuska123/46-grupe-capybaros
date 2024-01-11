<?php

class Kibiras2 {

    public $akmenuKiekis = 0;
    static private $akmenuKiekisVisuoseKibiruose = 0;


    public function prideti1Akmeni() {
        $this->akmenuKiekis++;
        self::$akmenuKiekisVisuoseKibiruose++;
    }

    public function pridetiDaugAkmenu($vnt) {
        $this->akmenuKiekis = $this->akmenuKiekis + $vnt;
        self::$akmenuKiekisVisuoseKibiruose += $vnt;  
    }

    public function akmenuKiekisVisuoseKibiruose() {
        return self::$akmenuKiekisVisuoseKibiruose;
    }
    public function kiekispririnktaAkmenu() {
        return $this->$akmenuKiekis;
    }
}


