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

echo'<br><br>';
// 7. vardas is raidziu

$newString = [
"An American in Paris",
"Breakfast at Tiffany's",
"2001: A Space Odyssey",
"It's a Wonderful Life"
];

function removeVowels($str) {
    return preg_replace('/[aeiyouAEYIOU]/', '', $str);
};

foreach ($newString as $string) {
    $result = removeVowels($string);
    echo "Galutinis tekstas be balsiu lygus: $result <br>";
}

echo'<br><br>';
// 8. vardas is raidziu

$pirmasFilmas = 'Star Wars: Episode ';
$epizodas = ' - A New Hope';

// "Star Wars: Episode.str_repeat(' ', rand(0,5)). rand(1,9) .- A New Hope";
// echo $stringas;

$rezultatas = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';


// Ištraukiamas epizodo numeris
preg_match('/\b\d\b/', $rezultatas, $matches);
$episodeNumber = $matches[0];

// Atspausdinamas epizodo numeris
echo "Generuotas tekstas: '$rezultatas'<br>";
echo "Epizodo numeris: $episodeNumber\n";

echo'<br><br>';
// 9. vardas is raidziu------------------

$string1 = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$string2 = "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";

// Funkcija, kuri suskaičiuoja trumpesnius arba lygius nei 5 raidžių žodžius
function countShortWords($str) {
    $words = explode(' ', $str);
    $count = 0;

    foreach ($words as $word) {
        // Ištriname skyrybos ženklus, kad gautume tik raidės
        $word = preg_replace('/[^A-Za-z]/', '', $word);

        // Tikriname žodžio ilgį
        if (mb_strlen($word) <= 5) {
            $count++;
        }
    }

    return $count;
}

// Skaičiuojame žodžius
$count1 = countShortWords($string1);
$count2 = countShortWords($string2);

echo "Tekstas 1: '$string1'\n<br>";
echo "Žodžių, trumpesnių arba lygių nei 5 raidės: $count1\n";
echo "<br>";
echo "Tekstas 2: '$string2'<br>";
echo "Žodžių, trumpesnių arba lygių nei 5 raidės: $count2\n";


// V2....-----------------------
echo'<br>';

function countShortWords2 ($str2) {
    $words2 = explode(" ", $str2);
    $count2 = 0;

    foreach ($words2 as $word2) {
    $word2 = preg_replace('/[^A-Za-z]/','', $words2);
    if(mb_strlen($word2) <= 5) {
        $count2++;
    }
    }
    return $count2;
    }

$count12 = countShortWords($string1);
$count22 = countShortWords($string1);

echo "Pirmame stringe, kur trumpesni nei ar lygus 5 simboliams: $count12 raides<br>";
echo "Antrame stringe, kur trumpesni nei ar lygus 5 simboliams: $count22 raides<br>";

// 10 uzduotis
echo '<br>';

$n=3;
function getName($n) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
     for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
 
    return $randomString;
}
 
echo getName($n);
// ------------------------------------------11 uzdavinys------------------------------------------

// Two input strings
$string1 = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$string2 = "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";

// Combine the words from both strings into an array
$words = array_merge(explode(' ', $string1), explode(' ', $string2));

// Remove duplicates
$uniqueWords = array_unique($words);

// Shuffle the array
shuffle($uniqueWords);

// Take the first 10 words
$randomWords = array_slice($uniqueWords, 0, 10);

// Convert the array of words into a string
$randomString = implode(' ', $randomWords);

// Output the generated random string
echo $randomString; '<br>';

echo '<br>';
$a1=array("red","green"); //pav. kaip veikiaarray_merge
$a2=array("blue","yellow");
print_r(array_merge($a1,$a2));
