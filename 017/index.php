<?php

require __DIR__ . '/Nso.php';

$nso1 = new Nso;

$nso2 = $nso1;

$nso3 = new Nso;

echo "<pre>";
echo $nso1->speed . '<br>';
// echo $nso1->color . '<br>';
echo $nso1->$weight . '<br>';

$nso1->goFly();

// var_dump($nso1);
// var_dump($nso2);
// var_dump($nso3);

