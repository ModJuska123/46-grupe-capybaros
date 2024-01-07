<?php

session_start();

$iban = "LT8970440" . rand(10000000000, 99999999999);
$vardas_pavarde = $_POST['vardas_pavarde'] ?? 0;
$akId = $_POST['akId'] ?? 0;

require __DIR__ . '/parts/pid.php'; 

if (isLithuanianPersonalCodeValid($akId)) {                              // ak validacija
    echo "Asmens kodas teisingas:)";
} else {
    echo "Asmens kodas neteisingas!!!";
    exit;
}

$id = $_GET['id'] ?? 0; // dvieju akId atmewtimas
$asmens_duomenys = json_decode(file_get_contents(__DIR__ . '/data/saskaitos.json'), true);
$asmens_duomuo = null;
foreach ($asmens_duomenys as $item) {
    if ($item['akId'] == $id) {
        break;
    }
}



$lesu_suma = $_POST['lesu_suma'] ?? 0;


$asmens_duomenys = json_decode(file_get_contents(__DIR__ . '/data/saskaitos.json'), true);
$asmens_duomenys[] = [
    'akId' => $akId,
    'iban' => $iban,
    'vardas_pavarde' => $vardas_pavarde,
    'lesu_suma' => (int) $lesu_suma,

];

    file_put_contents(__DIR__ . '/data/saskaitos.json', json_encode($asmens_duomenys, JSON_PRETTY_PRINT));

    $_SESSION['success'] = "Asmens, kurio a.k.: #$id sąskaita sukurta";

    header('location: http://localhost/capybaros/homework/bankas/read.php');

?>