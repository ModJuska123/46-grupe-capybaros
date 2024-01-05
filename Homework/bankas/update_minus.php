<?php

$id = $_GET['id'] ?? 0; 
if (!$id) {
    header("Location: http://localhost/capybaros/homework/delete/read.php");
    exit;
}

$asmens_duomenys = json_decode(file_get_contents(__DIR__ . '/data/saskaitos.json'), true);

foreach ($asmens_duomenys as $i => &$asmens_duomuo) {
    if($asmens_duomuo['akId'] == $id) {
        $asmens_duomuo['lesu_suma'] = (int)$_POST['lesu_suma'];
        $asmens_duomuo[$i] = $asmens_duomuo;
        break;
}
}

file_put_contents(__DIR__ . '/data/saskaitos.json', json_encode($asmens_duomenys, JSON_PRETTY_PRINT));

header('Location: http://localhost/capybaros/homework/bankas/read.php');