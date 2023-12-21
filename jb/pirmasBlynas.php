<h1>Labas</h1>
<a>Ka tu siandien</a>

<?php

echo '<h1>Labas rytas</h1>';
echo '<h1>Labas rytas sumaisytas</h1>';


$vardas = "Modestas";
$pavarde = "Juska";
$gimimoMetai = 1978;
$sieMetai = date("Y"); 
$amzius = $sieMetai - $gimimoMetai;
echo "Aš esu $vardas $pavarde. Man yra $amzius metai(ų).<br>";

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



?>

<h1>Labas</h1>

<?php

echo '<h1>Labas rytas</h1>';

$sk = rand(1, 5);
echo "Pirmas dublis: $sk . <br>";
while ($sk < 9) {
   echo $sk . '<br>';
   $sk = rand(0, 10);
}

for ($a = 1; $a <= 5; $a++) {
    echo '<b>Didžiojo ciklo Numeris: '.$a.' </b><br>';
    for ($x = 1; $x <= 5; $x++) {
        echo 'Mažojo Ciklo Numeris: '.$x.' <br>';
    }
 }

 echo '<br>';

 $colors = ['red', 'green', 'blue', 'yellow'];
foreach ($colors as $value) {
   echo 'Reikšmė: ' . $value . '<br>';
}

echo '<br>';
$colors = ['red', 'green', 'blue', 'yellow'];
foreach ($colors as $index => $value) {
   echo 'Indeksas: ' . $index . ' Reikšmė: ' . $value . '<br>';
}

echo '<br>';
for ($i = 1;$i <= 15;$i++){
    if (rand(0, 10)> 9){
        break;
    }
    echo $i;
    echo '<br>';
  }
  echo 'Ciklo pabaiga';

  echo '<br>';
  $i = 0;
  for ($i = 0;$i <= 5;$i++){
     if ($i==2){
         continue;
     }
     echo $i;
     echo '<br>';
  }
  echo 'Ciklo pabaiga';
  
  echo'<br><br><br><br><br>';