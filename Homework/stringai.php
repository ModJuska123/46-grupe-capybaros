<!-- Stringai - uzdaviniai -->
<?php
// 1. trumpesnis stringas

$vardas = 'James';
$pavarde = 'Bond';
if (strlen($vardas) < strlen($pavarde)) {
    echo "Trumpesnis stringas yra vardas: $vardas";
} else {echo "Trumpesnis stringas yra pavarde: $pavarde";
}

echo'<br>';
// 2. vardas didziosiomis, pavarde mazosiomis;

echo strtolower($vardas) . ' ' . ($pavarde);

echo'<br>';
// 3. vardas is raidziu

// Sukurkime du kintamuosius ir priskirkime savo mylimo aktoriaus vardą ir pavardę
$vardas1 = "Jonas";
$pavarde1 = "Jonaitis";

// Sukurkime trečią kintamąjį ir sudarykime iš pirmų vardo ir pavardės raidžių
$pirmosRaidziuStringas = substr($vardas1, 0, 1) . substr($pavarde1, 3, 4);

// Atspausdinkime trečią kintamąjį
echo "Sudarytas naujas vardas: $pirmosRaidziuStringas. <br>";

echo'<br>';
// 4. vardas is raidziu

$vardas2 = "Chuck";
$pavarde2 = "Noris";

$paskutiniuRaidziuStringas = substr($vardas2, -1) . substr($pavarde2, -1);

echo "Paskutiniu raidziu stringas vadinasi: $paskutiniuRaidziuStringas";

echo'<br>';
// 5. vardas is raidziu

$movie = "An American in Paris";
$a = array('A', 'a');
$newMovieString = str_replace($a, "*", $movie);
echo $newMovieString;

echo'<br>';
// 6. vardas is raidziu

$str = "An American in Paris";
$char = 'a';
echo "The character 'a' appears " . substr_count(strtolower($str), $char) . " times in the string.";

echo'<br>';
// 7. vardas is raidziu

$newString = "An American in Paris";
$characters_to_remove = 'A';
$newMovieString = trim($newString, $characters_to_remove);

echo $newMovieString;



// Sukuriami kintamieji su tekstais
$strings = [
    "An American in Paris",
    "Breakfast at Tiffany's",
    "2001: A Space Odyssey",
    "It's a Wonderful Life"
];

// Funkcija, kuri ištrina visas balses iš teksto
function removeVowels($str) {
    return preg_replace('/[aeiouAEIOU]/', '', $str);
}

// Ciklas per visus tekstus
foreach ($strings as $string) {
    // Ištrinamos balsės
    $result = removeVowels($string);

    // Atspausdinamas rezultatas
    echo "Pradinis tekstas: '$string'\n";
    echo "Tekstas be balsių: '$result'\n";
    echo "--------------------------\n";
}