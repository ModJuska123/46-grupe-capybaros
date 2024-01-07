<?php

session_start();

$iban = "LT8970440" . rand(10000000000, 99999999999);
$vardas_pavarde = $_POST['vardas_pavarde'] ?? 0;
$akId = $_POST['akId'] ?? 0;
$lesu_suma = $_POST['lesu_suma'] ?? 0;

require __DIR__ . '/parts/pid.php'; 
require __DIR__ . '/parts/nck.php'; 


if (isLithuanianPersonalCodeValid($akId)) {                              // ak validacija
    echo "Asmens kodas teisingas... <br>";
} else {
    echo "Asmens kodas neteisingas!!!";
    exit;
}

$asmens_duomenys = json_decode(file_get_contents(__DIR__ . '/data/saskaitos.json'), true);

// dvieju akId identifikacija
$asmens_duomuo = null;
foreach ($asmens_duomenys as $item) {
    if ($item['akId'] == $akId) {
        echo "Asmens kodas sutampa su naudojamu!!!";
        exit;
    }
}


if (isNameShorterThenThree($vardas_pavarde)) {                              // vardo ilgis
    
};


$asmens_duomenys[] = [
    'akId' => $akId,
    'iban' => $iban,
    'vardas_pavarde' => $vardas_pavarde,
    'lesu_suma' => (int) $lesu_suma,

];

    file_put_contents(__DIR__ . '/data/saskaitos.json', json_encode($asmens_duomenys, JSON_PRETTY_PRINT));

    $_SESSION['success'] = "Asmens, kurio a.k.: #$id sąskaita sukurta";

    header('location: http://localhost/capybaros/homework/bankas/read.php');

