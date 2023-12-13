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
echo"5. Nuliu: $sn, Vienetu: $sv, Dvejetu: $sd<br>";

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
echo "6. <h$atsitiktinisSkaicius>$atsitiktinisSkaicius</h$atsitiktinisSkaicius><br>";

// 7. zali, raudoni, melyni
for ($i = 0; $i < 3; $i++) {
    $randomNumber = rand(-10, 10);
    if($randomNumber < 0) {
        $color = 'green';
    } elseif ($randomNumber == 0) {
        $color = 'red';} else {
            $color = 'blue';
        }
        echo "<span style=\"color: $color;\">$randomNumber</span><br>";
    }

// 8. zvakes
$kiekis = rand(5, 3000);
$kaina = 1;
$bendraKaina = $kiekis * $kaina;
    if($bendraKaina >= 1000 && $bendraKaina <= 2000) {
    $nuolaidosProcentas = 3;
    $bendraKaina -= ($nuolaidosProcentas / 100) * $bendraKaina;
} elseif ($bendraKaina > 2000) {
    $nuolaidosProcentas = 4;
    $bendraKaina -= ($nuolaidosProcentas / 100) * $bendraKaina;
};
echo "Perkama žvakių: $kiekis vnt.\n";
echo "Kaina už žvakes: $bendraKaina EUR.\n<br>";


// Generuojame atsitiktinį žvakių kiekį nuo 5 iki 3000
$candleQuantity = rand(5, 3000);

// Žvakių vieneto kaina
$candlePrice = 1;

// Skaičiuojame bendrą žvakių kainą
$totalPrice = $candleQuantity * $candlePrice;

// Taikome nuolaidas pagal sąlygas
if ($totalPrice > 1000 && $totalPrice <= 2000) {
    $discountPercentage = 3;
    $discount = ($discountPercentage / 100) * $totalPrice;
    $totalPrice -= $discount;
    $discountMessage = "Taikoma $discountPercentage% nuolaida!";
} elseif ($totalPrice > 2000) {
    $discountPercentage = 4;
    $discount = ($discountPercentage / 100) * $totalPrice;
    $totalPrice -= $discount;
    $discountMessage = "Taikoma $discountPercentage% nuolaida!";
} else {
    $discountMessage = "Nėra nuolaidos.";
}

// Spausdiname rezultatus
echo "Perkama žvakių: $candleQuantity vnt.\n";
echo "Kaina už žvakes: $totalPrice EUR\n";
echo $discountMessage;

echo"<br>";
// 9. artimetinis vidurkis

// Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 100
$number1 = rand(0, 100);
$number2 = rand(0, 100);
$number3 = rand(0, 100);

// Paskaičiuokite jų aritmetinį vidurkį
$average = ($number1 + $number2 + $number3) / 3;

// Aritmetinį vidurkį atmetus reikšmes mažesnes nei 10 arba didesnes nei 90
$filteredNumbers = array_filter([$number1, $number2, $number3], function ($value) {
    return $value >= 10 && $value <= 90;
});

if (count($filteredNumbers) > 0) {
    $modifiedAverage = array_sum($filteredNumbers) / count($filteredNumbers);
} else {
    $modifiedAverage = "Nėra tinkamų reikšmių.";
}

// Apvalinkite rezultatus iki sveiko skaičiaus
$average = round($average);
$modifiedAverage = is_numeric($modifiedAverage) ? round($modifiedAverage) : $modifiedAverage;

// Spausdiname rezultatus
echo "Atsitiktiniai skaičiai: $number1, $number2, $number3\n";
echo "Aritmetinis vidurkis: $average\n";
echo "Modifikuotas vidurkis: $modifiedAverage\n";

echo"<br>";
// 10. laikrodis

// Sugeneruokite atsitiktines valandas, minutes ir sekundes
$hours = rand(0, 23);
$minutes = rand(0, 59);
$seconds = rand(0, 59);

// Atspausdinkite laikrodį prieš sekundžių pridėjimą
echo "Pradinis laikas: " . sprintf('%02d:%02d:%02d', $hours, $minutes, $seconds) . "\n";

// Sugeneruokite atsitiktinį skaičių nuo 0 iki 300 (papildomos sekundės)
$extraSeconds = rand(0, 300);

// Pridėkite sekundes prie laiko
$seconds += $extraSeconds;

// Atnaujinkite minutes ir valandas, jei sekundų skaičius viršija 59
$minutes += floor($seconds / 60);
$seconds %= 60;

// Atnaujinkite valandas, jei minutes viršija 59
$hours += floor($minutes / 60);
$minutes %= 60;

// Jei valandos viršija 23, priskirkite naują dieną
$hours %= 24;

// Atspausdinkite laikrodį po sekundžių pridėjimo ir pridedamų sekundžių skaičių
echo "10. Laikas po pridėtų sekundžių ($extraSeconds s): " . sprintf('%02d:%02d:%02d', $hours, $minutes, $seconds) . "\n";
echo "10.Pridėtų sekundžių skaičius: $extraSeconds\n";

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





