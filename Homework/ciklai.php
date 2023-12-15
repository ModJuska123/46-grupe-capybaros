<!-- 3. Ciklai PHP -->
<?php

// 1. linija ------------------------
$line = str_repeat('*', 400);

$chunks = str_split($line, 50);

foreach ($chunks as $chunk) {
    echo '<div class="ateivis">' .$chunk . '</div>';
}
echo'<br><br><br>';

// 2. atsitiktiniai skaiciai ------------------------
$skaiciaiSuTarpais = 0;
for ($i=0; $i < 300; $i++) { 
    $atsitiktinisSkaicius = rand(0, 300);
    $skaiciaiSuTarpais = $skaiciaiSuTarpais . " " . $atsitiktinisSkaicius;
    echo $atsitiktinisSkaicius;
}
$counter = 0;
for ($i = 0; $i < 300; $i++) {
    $randomNumber = rand(0, 300);
    if($randomNumber > 275) {
        $color = 'red';
    } else {
        $color = 'black';
    };
    if ($randomNumber > 150) {
        $counter++;
    }
        echo "<span style=\"color: $color;\">$randomNumber</span><br>";
    }
    echo "Didesniu uz 150 skaiciu yra: $counter <br><br>";

    // V2 --------------

//     // Function to generate a random number between 0 and 300
// function generateRandomNumber() {
//     return rand(0, 300);
// }

// // Generate 300 random numbers
// $numbers = array_map('generateRandomNumber', range(1, 300));

// // Count the numbers greater than 150
// $countGreaterThan150 = count(array_filter($numbers, function ($number) {
//     return $number > 150;
// }));

// // Output the numbers separated by spaces
// echo implode(' ', $numbers);

// // Output the count of numbers greater than 150
// echo "\nCount of numbers greater than 150: " . $countGreaterThan150;

// // Output the numbers greater than 275 in red
// echo "\nNumbers greater than 275: ";
// foreach ($numbers as $number) {
//     if ($number > 275) {
//         echo "\033[0;31m$number\033[0m "; // Display in red
//     } else {
//         echo "$number ";
//     }
// }