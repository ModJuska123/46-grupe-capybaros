<?php

require __DIR__ . '/Kibiras.php';

$kibiras = new Kibiras;
$kibiras1 = new Kibiras;
$kibiras2 = new Kibiras;


$kibiras->prideti1Akmeni();  
$kibiras1->prideti1Akmeni();  
$kibiras1->prideti1Akmeni();  
$kibiras->pridetiDaugAkmenu(100); 
$kibiras2->pridetiDaugAkmenu(100); 
$kibiras1->pridetiDaugAkmenu(100); 
$kibiras->kiekPririnktaAkmenu(); 

?>