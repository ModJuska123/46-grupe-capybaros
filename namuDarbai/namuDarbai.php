<!-- kintamiji ir sakygos -->
<!-- 1. 4 kintamiejis -->
<?php

$vardas = 'Modestas';
$pavarde = "Juska";
$gimimoMetai = 1978;
$sieMetai = date("Y"); 
$amzius = $sieMetai - $gimimoMetai;

echo "Aš esu $vardas $pavarde. Man yra $amzius metai(ų).";

// 2. du kintamieji

$pirmaReiksme = rand(0, 4);
$antraReiksme = rand(0, 4);

$didesneReiksme = max($pirmaReiksme, $antraReiksme);
$mazesneReiksme = min($pirmaReiksme, $antraReiksme);

if ($mazesneReiksme != 0) {
    $rezultatas = $didesneReiksme / $mazesneReiksme;
    echo "Didesnė reikšmė: $didesneReiksme, Mažesnė reikšmė: $mazesneReiksme, Rezultatas: " . round($rezultatas, 2);
} else {
    echo "Dalyba iš nulio negalima.";
}

//v2
$pirmasSkaicius = rand(0,4);
$antrasSkaicius = rand(0,4);
$didesnisSkaicius = max($pirmasSkaicius, $antrasSkaicius);
$mazesnisSkaicius = min($pirmasSkaicius, $antrasSkaicius);
if($mazesnisSkaicius > 0) {
    $galutinisRezultatas = $didesnisSkaicius / $mazesnisSkaicius;
    echo "Galutinis rezultatas lygus:  $galutinisRezultatas";
} else {
    echo "Dalyba is nulio negalima";
};

// 3. trys kintamieji
$pirmas = rand(0,25);
$antras = rand(0,25);
$trecias  = rand(0,25);

// Sudedam visus tris skaičius į masyvą
$numbers = [$pirmas, $antras, $trecias];

// Rūšiuojam masyvą didėjimo tvarka
sort($numbers);

// Pasiimam vidurinį skaičių
$middleNumber = $numbers[1];

// Spausdinam rezultatą
echo "Vidurinis skaičius: $middleNumber";

//4. trikampis

// Generate random lengths for the sides of the triangle
$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);

// Function to check if the given sides can form a triangle
function isTriangle($a, $b, $c) {
    return ($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a);
}

// Check if the generated sides can form a triangle
if (isTriangle($a, $b, $c)) {
    echo "Trikampis su kraštinėmis $a, $b, ir $c yra galimas.";
} else {
    echo "Trikampis su kraštinėmis $a, $b, ir $c nėra galimas.";
}

// 11. 

// Sugeneruojame 6 atsitiktinius skaičius nuo 1000 iki 9999
$num1 = rand(1000, 9999);
$num2 = rand(1000, 9999);
$num3 = rand(1000, 9999);
$num4 = rand(1000, 9999);
$num5 = rand(1000, 9999);
$num6 = rand(1000, 9999);

// Atspausdiname reikšmes viename stringe, išrūšiuotas nuo didžiausios iki mažiausios
$result = '';

// Tikriname kiekvieną skaičių ir pridedame prie rezultato stringo atitinkamai
if ($num1 >= $num2 && $num1 >= $num3 && $num1 >= $num4 && $num1 >= $num5 && $num1 >= $num6) {
    $result .= $num1 . ' ';
    // ...
} elseif ($num2 >= $num1 && $num2 >= $num3 && $num2 >= $num4 && $num2 >= $num5 && $num2 >= $num6) {
    $result .= $num2 . ' ';
    // ...
} elseif ($num3 >= $num1 && $num3 >= $num2 && $num3 >= $num4 && $num3 >= $num5 && $num3 >= $num6) {
    $result .= $num3 . ' ';
    // ...
} elseif ($num4 >= $num1 && $num4 >= $num2 && $num4 >= $num3 && $num4 >= $num5 && $num4 >= $num6) {
    $result .= $num4 . ' ';
    // ...
} elseif ($num5 >= $num1 && $num5 >= $num2 && $num5 >= $num3 && $num5 >= $num4 && $num5 >= $num6) {
    $result .= $num5 . ' ';
    // ...
} else {
    $result .= $num6 . ' ';
}

echo rtrim($result); // Išspausdiname rezultatą, pašalindami paskutinį tarpą
<!-- 
<?php
<!-- klases uzdaviniai -->
echo <br>;
$kas = 0;
var-dump(isset($kas)); -->





