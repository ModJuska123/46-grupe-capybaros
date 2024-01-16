<!-- 1. uzduotis -->

<?php

// Function to generate a random number between $min and $max
function generateRandomNumber($min, $max) {
    return mt_rand($min, $max);
}

// Initialize an empty array
$array = array();

// Generate 30 random numbers and fill the array
for ($i = 0; $i < 30; $i++) {
    $randomNumber = generateRandomNumber(5, 25);
    $array[$i] = $randomNumber;
}

// Print the generated array
echo "Generated Array is:\n";
print_r($array) . '<br><br><br>';

?>

echo "<br><br><br>";
<!-- 2. uzduotis -->

<?php

// Sugeneruojame masyvą iš 30 atsitiktinių skaičių nuo 5 iki 25
$masyvas = [];
for ($i = 0; $i < 30; $i++) {
    $masyvas[$i] = rand(5, 25);
}

// Suskaičiuojame, kiek masyve yra reikšmių didesnių už 10
$didesniUz10 = 0;
foreach ($masyvas as $reiksme) {
    if ($reiksme > 10) {
        $didesniUz10++;
    }
} 

// Randame didžiausią masyvo reikšmę ir jos indeksą/arba indeksus
$maxReiksme = max($masyvas);
$maxIndeksai = array_keys($masyvas, $maxReiksme);

// Suskaičiuojame visų porinių (lyginių) indeksų reikšmių sumą
$poriniuSuma = 0;
foreach ($masyvas as $indeks => $reiksme) {
    if ($indeks % 2 == 0) {
        $poriniuSuma += $reiksme;
    }
}

// Sukuriame naują masyvą
$naujasMasyvas = [];
foreach ($masyvas as $indeks => $reiksme) {
    $naujasMasyvas[$indeks] = $reiksme - $indeks;
}

// Papildome masyvą 10 elementais nuo 5 iki 25
for ($i = 30; $i < 40; $i++) {
    $naujasMasyvas[$i] = rand(5, 25);
}

// Sukuriame du naujus masyvus: vienas iš neporinių, kitas iš porinių indekso reikšmių
$neporiniuMasyvas = array_filter($naujasMasyvas, function ($key) {
    return $key % 2 != 0;
}, ARRAY_FILTER_USE_KEY);

$poriniuMasyvas = array_filter($naujasMasyvas, function ($key) {
    return $key % 2 == 0;
}, ARRAY_FILTER_USE_KEY);

// Padarome pirminio masyvo elementus su poriniais indeksais lygius 0, jei jie didesni už 15
foreach ($masyvas as $indeks => $reiksme) {
    if ($indeks % 2 == 0 && $reiksme > 15) {
        $masyvas[$indeks] = 0;
    }
}

// Surandame pirmą indeksą, kurio elemento reikšmė didesnė už 10
$pirmasDidesnisUz10Indeksas = array_search(true, array_map(function ($reiksme) {
    return $reiksme > 10;
}, $masyvas));

// Naudojant unset() ištriname visus elementus su poriniais indeksais
foreach ($masyvas as $indeks => $reiksme) {
    if ($indeks % 2 == 0) {
        unset($masyvas[$indeks]);
    }
}

// Atspausdiname rezultatus
echo "Reikšmių didesnių už 10 kiekis: $didesniUz10\n";
echo "Didžiausia reikšmė: $maxReiksme, jos indeksas (-ai): " . implode(', ', $maxIndeksai) . "\n";
echo "Porinių indeksų reikšmių suma: $poriniuSuma\n";
echo "Naujas masyvas: " . implode(', ', $naujasMasyvas) . "\n";
echo "Neporinių indeksų masyvas: " . implode(', ', $neporiniuMasyvas) . "\n";
echo "Porinių indeksų masyvas: " . implode(', ', $poriniuMasyvas) . "\n";
echo "Pirminio masyvo elementai su poriniais indeksais: " . implode(', ', $masyvas) . "\n";
echo "Pirmas indeksas, kurio elemento reikšmė didesnė už 10: $pirmasDidesnisUz10Indeksas\n";
echo "Masyvas be elementų su poriniais indeksais: " . implode(', ', $masyvas) . "<br><br><br>";

?>

<!-- 3. uzdavinys -->

<?php

// Function to generate a random letter (A, B, C, D)
function getRandomLetter() {
    $letters = ['A', 'B', 'C', 'D'];
    $randomIndex = array_rand($letters);
    return $letters[$randomIndex];
}

// Generate an array with random letters (A, B, C, D)
$arrayLength = 200;
$randomArray = array_map(function () {
    return getRandomLetter();
}, range(1, $arrayLength));

// Count occurrences of each letter
$letterCounts = array_count_values($randomArray);

// Display the generated array
echo "Generated Array: " . implode(', ', $randomArray) . "\n\n";

// Display letter counts
foreach ($letterCounts as $letter => $count) {
    echo "Letter $letter: $count occurrences\n <br>";
}

?>

<!-- 4. uzdavinys -->

<?php

// Generate an array with random values A, B, C, D
$length = 200;
$possibleValues = ['A', 'B', 'C', 'D'];
$array = array_map(function() use ($possibleValues) {
    return $possibleValues[array_rand($possibleValues)];
}, range(1, $length));

// Output the original array
echo "Original Array:\n";
print_r($array);

// Sort the array alphabetically
sort($array);

// Output the sorted array
echo "\nSorted Array:\n <br><br><br>";
print_r($array);

?>

<!-- 5. uzdavinys -->

<?php

// Function to generate an array based on the specified condition
function generateArray($length)
{
    $array = [];
    for ($i = 0; $i < $length; $i++) {
        // Replace this condition with your own logic
        $array[] = rand(1, 10);
    }
    return $array;
}

// Generate three arrays
$array1 = generateArray(5);
$array2 = generateArray(5);
$array3 = generateArray(5);

// Combine arrays by adding corresponding values
$combinedArray = [];
foreach ($array1 as $key => $value) {
    $combinedArray[$key] = $value + $array2[$key] + $array3[$key];
}

// Calculate the number of unique values and unique combinations
$uniqueValues = count(array_unique($combinedArray));
$uniqueCombinations = count(array_unique($combinedArray, SORT_REGULAR));

// Display the results
echo "Array 1: " . implode(", ", $array1) . "\n";
echo "Array 2: " . implode(", ", $array2) . "\n";
echo "Array 3: " . implode(", ", $array3) . "\n";
echo "Combined Array: " . implode(", ", $combinedArray) . "\n";
echo "Number of Unique Values: $uniqueValues\n";
echo "Number of Unique Combinations: $uniqueCombinations\n <br><br><br>";

?>

<!-- 6 uzdavinys -->

<?php

// Function to generate an array of unique random numbers
function generateUniqueRandomArray($length, $min, $max) {
    $numbers = [];
    while (count($numbers) < $length) {
        $randomNumber = mt_rand($min, $max);
        if (!in_array($randomNumber, $numbers)) {
            $numbers[] = $randomNumber;
        }
    }
    return $numbers;
}

// Set the length of the arrays
$arrayLength = 100;

// Set the range for random numbers
$minValue = 100;
$maxValue = 999;

// Generate two arrays with unique random numbers
$array1 = generateUniqueRandomArray($arrayLength, $minValue, $maxValue);
$array2 = generateUniqueRandomArray($arrayLength, $minValue, $maxValue);

// Display the generated arrays
echo "Array 1: " . implode(', ', $array1) . "\n<br>";
echo "Array 2: " . implode(', ', $array2) . "\n<br><br><br>";

?>

<!-- 7. uzdavinys -->
<!---8. uzdavinys -->
<!-- 9. uzdavinys -->
<!-- 10. uzdavinys --> 

<?php

// Function to generate an array based on the given rules
function generateArray10($count) {
    $resultArray = array();

    // Generating the first two random numbers
    $resultArray[] = mt_rand(5, 25);
    $resultArray[] = mt_rand(5, 25);

    // Generating the rest of the numbers based on the specified rules
    for ($i = 2; $i < $count; $i++) {
        $resultArray[] = $resultArray[$i - 2] + $resultArray[$i - 1];
    }

    return $resultArray;
}

// Number of elements to generate
$numberOfElements = 10;

// Generate the array
$result = generateArray10($numberOfElements);

// Display the generated array
echo "Generated Array: " . implode(", ", $result);

?>

echo '<br><br><br>';
<!-- 10. uzdavinys --> 

<?php

// Function to generate an array with unique random numbers
function generateUniqueArray($length, $min, $max)
{
    $array = [];
    while (count($array) < $length) {
        $randomNumber = rand($min, $max);
        if (!in_array($randomNumber, $array)) {
            $array[] = $randomNumber;
        }
    }
    return $array;
}

// Function to sort the array as described in the task
function customSort($array)
{
    sort($array);
    $middleIndex = floor(count($array) / 2);
    $middleValue = $array[$middleIndex];
    
    $firstHalf = array_slice($array, 0, $middleIndex);
    $secondHalf = array_slice($array, $middleIndex + 1);
    
    rsort($firstHalf);
    sort($secondHalf);
    
    return array_merge($firstHalf, [$middleValue], $secondHalf);
}

// Function to calculate the sum of array elements excluding the middle element
function sumWithoutMiddle($array)
{
    $middleIndex = floor(count($array) / 2);
    $middleValue = $array[$middleIndex];
    
    unset($array[$middleIndex]);
    
    return array_sum($array);
}

// Function to check if the difference between sums is greater than 30
function isDifferenceGreaterThan30($array)
{
    $firstHalf = array_slice($array, 0, floor(count($array) / 2));
    $secondHalf = array_slice($array, floor(count($array) / 2) + 1);
    
    $sumDifference = abs(sumWithoutMiddle($firstHalf) - sumWithoutMiddle($secondHalf));
    
    return $sumDifference > 30;
}

// Generate an array with unique random numbers
$array = generateUniqueArray(101, 0, 300);

// Sort the array
$array = customSort($array);

// Check if the difference between sums is greater than 30 and repeat sorting if needed
while (isDifferenceGreaterThan30($array)) {
    $array = generateUniqueArray(101, 0, 300);
    $array = customSort($array);
}

// Display the final sorted array and the sums of the first and second halves
echo "Sorted Array: " . implode(', ', $array) . "\n";
echo "Sum of First Half: " . sumWithoutMiddle(array_slice($array, 0, floor(count($array) / 2))) . "\n";
echo "Sum of Second Half: " . sumWithoutMiddle(array_slice($array, floor(count($array) / 2) + 1)) . "\n";

?>

