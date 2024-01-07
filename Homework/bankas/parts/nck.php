<?php
function isNameShorterThenThree($str) {

$words = explode (" ", $str);

foreach ($words as $word) {

  if (strlen ($word) <= 3) {

    echo "Vardas ar pavardė trumpesnis nei 3 simboliai!!!";
    exit;
  }
}
}
?>