<?php

class Nso {
    public $speed = 'fast';
    protected $color = 'red';
    private $weight = 'heavy';


public function goFly() {
    echo "I am flying" . $this->speed . '<br>';
    this->goSwim();
}

private function goSwim() {
    echo 'I am swiming <br>';
}

}

