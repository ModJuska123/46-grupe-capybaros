<?php

// $akId = rand(3, 4) . rand(1000000000, 9999999999); 
$iban = "LT8970440" . rand(10000000000, 99999999999);
$vardas_pavarde = $_POST['vardas_pavarde'] ?? 0;
$akId = $_POST['akId'] ?? 0;

$asmens_duomenys = json_decode(file_get_contents(__DIR__ . '/data/saskaitos.json'), true);
$asmens_duomenys[] = [
    'akId'=>$akId,
    'iban'=>$iban,
    'vardas_pavarde'=>$vardas_pavarde,
];

    file_put_contents(__DIR__ . '/data/saskaitos.json', json_encode($asmens_duomenys, JSON_PRETTY_PRINT));

    header('location: http://localhost/capybaros/homework/bankas/read.php');

?>