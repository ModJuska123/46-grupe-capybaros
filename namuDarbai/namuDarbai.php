<!-- kintamiji ir sakygos -->
<!-- 1. 4 kintamiejis -->

<?php
$vardas = 'Modestas';
$pavarde = "Juska";
$gimimoMetai = 1978;
$sieMetai = date("Y"); 
$amzius = $sieMetai - $gimimoMetai;

echo "1. Aš esu $vardas $pavarde. Man yra $amzius metai(ų).<br>";

// 2. du kintamieji

$pirmasSkaicius = rand(0,4);
$antrasSkaicius = rand(0,4);
$didesnisSkaicius = max($pirmasSkaicius, $antrasSkaicius);
$mazesnisSkaicius = min($pirmasSkaicius, $antrasSkaicius);
if($mazesnisSkaicius > 0) {
    $galutinisRezultatas = $didesnisSkaicius / $mazesnisSkaicius;
    echo "2. Galutinis rezultatas lygus:  $galutinisRezultatas";
} else {
    echo "2. Dalyba is nulio negalima";
};

echo"<br>";
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
echo "3. Vidurinis skaičius: $middleNumber<br>";

//4. trikampis
$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);
function isTriangle($a, $b, $c) {
    return ($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a);
}
if (isTriangle($a, $b, $c)) {
    echo "4. Trikampis su kraštinėmis $a, $b, ir $c yra galimas.<br>";
} else {
    echo "4. Trikampis su kraštinėmis $a, $b, ir $c nėra galimas.<br>";
}

// 5. keturi kintamieji ir suma
$kp = rand(0, 2);
$ka = rand(0, 2);
$kt = rand(0, 2);
$kk = rand(0, 2);
$sn = ($kp === 0) + ($ka === 0) + ($kt === 0) + ($kk === 0);
$sv = ($kp === 1) + ($ka === 1) + ($kt === 1) + ($kk === 1);
$sd = ($kp === 2) + ($ka === 2) + ($kt === 2) + ($kk === 2);
echo"5/ Nuliu: $sn, Vienetu: $sv, Dvejetu: $sd<br>";

// V2
// Sukurkite keturis kintamuosius ir rand() funkcija sugeneruokite jiems reikšmes nuo 0 iki 2
// $variable1 = rand(0, 2);
// $variable2 = rand(0, 2);
// $variable3 = rand(0, 2);
// $variable4 = rand(0, 2);

// // Suskaičiuokite kiek yra nulių, vienetų ir dvejetų
// $countZeros = ($variable1 == 0) + ($variable2 == 0) + ($variable3 == 0) + ($variable4 == 0);
// $countOnes = ($variable1 == 1) + ($variable2 == 1) + ($variable3 == 1) + ($variable4 == 1);
// $countTwos = ($variable1 == 2) + ($variable2 == 2) + ($variable3 == 2) + ($variable4 == 2);

// // Spausdiname rezultatus
// echo "5. Reikšmės: $variable1, $variable2, $variable3, $variable4";
// echo "Nulių: $countZeros, Vienetų: $countOnes, Dvejetų: $countTwos<br>";

// 6. h tagas

$atsitiktinisSkaicius = rand(1, 6);
<h>$atsitiktinisSkaicius</h>;



















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

// echo rtrim($result); // Išspausdiname rezultatą, pašalindami paskutinį tarpą
// <!-- 
// <?php
// <!-- klases uzdaviniai -->
// echo <br>;
// $kas = 0;
// var-dump(isset($kas)); -->





