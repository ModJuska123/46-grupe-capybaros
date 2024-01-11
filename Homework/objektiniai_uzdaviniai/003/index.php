<?php

require __DIR__ . '/Kibiras2.php';

$kibiras = new Kibiras2;
$kibiras1 = new Kibiras2;
$kibiras2 = new Kibiras2;


$kibiras->prideti1Akmeni();  
$kibiras1->prideti1Akmeni();  
$kibiras1->prideti1Akmeni();  
$kibiras->pridetiDaugAkmenu(100); 
$kibiras2->pridetiDaugAkmenu(100); 
$kibiras1->pridetiDaugAkmenu(100); 
$kibiras->akmenuKiekisVisuoseKibiruose(); 
$kibiras->kiekispririnktaAkmenu(); 

?>