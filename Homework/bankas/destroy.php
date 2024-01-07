<?php

session_start();

$id = $_GET['id'] ?? 0;

$asmens_duomenys = json_decode(file_get_contents(__DIR__ . '/data/saskaitos.json'), true);
foreach ($asmens_duomenys as $index => $asmens_duomuo) {
    if ($asmens_duomuo['akId'] == $id && $asmens_duomuo['lesu_suma'] === 0) {
        unset($asmens_duomenys[$index]);
        break;
    }
}

$asmens_duomenys = array_values($asmens_duomenys);

file_put_contents(__DIR__ . '/data/saskaitos.json', json_encode($asmens_duomenys, JSON_PRETTY_PRINT));

header('Location: http://localhost/capybaros/homework/bankas/read.php');