<!-- 3. Ciklai PHP -->
<?php

// 1. linija ------------------------
$line = str_repeat('*', 400); //kartoja stringa

$chunks = str_split($line, 50);

foreach ($chunks as $chunk) {
    echo '<div class="ateivis">' .$chunk . '</div>';
}
echo'<br><br><br>';

// 2. atsitiktiniai skaiciai ------------nepavyko nuspalvinti raudonai------------
    $skaiciaiSuTarpais = "";
    $counter = 0;
    for ($i=0; $i < 300; $i++) { 
    $atsitiktinisSkaicius = rand(0, 300);
    $skaiciaiSuTarpais .= ' '. $atsitiktinisSkaicius;
    
    if($atsitiktinisSkaicius > 275) {
        $color = 'red';
    } else {
        $color = 'black';
    };
    if ($atsitiktinisSkaicius > 150) {
        $counter++;
    }
}
    echo "Atsitiktiniai skaiciai: $skaiciaiSuTarpais";
    echo "<span style=\"color: $color;\">$atsitiktinisSkaicius</span><br>";
    echo "Didesniu uz 150 skaiciu yra: $counter <br><br>";

    echo '<br>';


    // 3. skaiciai nuo 1
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
    </style>
    <title>PHP Random Numbers</title>
</head>
<body>
    <?php
        // Function to check if a number is divisible by 77 without remainder
        function isDivisibleBy77($number) {
            return $number % 77 === 0;
        }

        // Generate a random number between 3000 and 4000
        $randomNumber = rand(3000, 4000);

        // Display the random number
        echo "<p>Random number: $randomNumber</p>";

        // Array to store numbers divisible by 77
        $divisibleBy77Array = array();

        // Check numbers from 1 to the random number
        for ($i = 1; $i <= $randomNumber; $i++) {
            if (isDivisibleBy77($i)) {
                $divisibleBy77Array[] = $i;
            }
        }

        // Print the result with commas
        $result = implode(', ', $divisibleBy77Array);
        echo "<p>Numbers divisible by 77: $result</p>";
    ?>
</body>
</html>

<!-- // if (i % 77 == 0) return i else return null; -->


echo '<br>';
<!-- // 4. uzdavinys -->

<!-- <!DOCTYPE html
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            display: flex;
            
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .square {
            font-size: 20px; /* Adjust font size as needed */
            line-height: 0.5; /* Adjust line height for proper spacing */
        }
    </style>
    <title>PHP Square Drawing</title>
</head>
<body>
    <?php
        // Function to draw a square of asterisks
        function drawSquare($size) {
            for ($i = 0; $i < $size; $i++) {
                for ($j = 0; $j < $size; $j++) {
                    echo '*';
                }
                echo '<br>';
            }
        }

        // Set the size of the square
        $squareSize = 100;

        // Display the square
        echo '<div class="square">';
        drawSquare($squareSize);
        echo '</div>';
    ?>
</body>
</html>

echo '<br><br><br>'; -->
<!-- 5. uzduotis -->

<!-- 6. uzduotis -->
<?php

function coinToss()
{
    return rand(0, 1); // 0 represents heads (herbas), 1 represents tails (skaičius)
}

// Scenario 1: Stop when heads (herbas) appears
echo "Scenario 1: Stop when heads appears\n";
do {
    $result = coinToss();
    echo $result === 0 ? "H\n" : "S\n";
} while ($result !== 0);
echo "\n";

// Scenario 2: Stop after three consecutive heads (herbas)
echo "Scenario 2: Stop after three consecutive heads\n";
$headsCount = 0;
do {
    $result = coinToss();
    echo $result === 0 ? "H\n" : "S\n";
    $headsCount = ($result === 0) ? $headsCount + 1 : 0;
} while ($headsCount < 3);
echo "\n";

// Scenario 3: Stop after three consecutive heads (herbas) in a row
echo "Scenario 3: Stop after three consecutive heads in a row\n";
$consecutiveHeadsCount = 0;
do {
    $result = coinToss();
    echo $result === 0 ? "H\n" : "S\n";
    $consecutiveHeadsCount = ($result === 0) ? $consecutiveHeadsCount + 1 : 0;
} while ($consecutiveHeadsCount < 3);
echo "\n";
?>

echo '<br><br><br>';
<!-- 7. uzduotis? -->

<?php

function generatePoints($min, $max) {
    return rand($min, $max);
}

function playBingo() {
    $kazysPoints = 0;
    $petrasPoints = 0;

    while ($kazysPoints < 222 && $petrasPoints < 222) {
        // Kazys and Petras collect points
        $kazysPoints += generatePoints(5, 25);
        $petrasPoints += generatePoints(10, 20);

        // Display the current status
        echo "Kazys: $kazysPoints points, Petras: $petrasPoints points<br>";

        // Determine the winner (if any)
        if ($kazysPoints >= 222) {
            echo " Partiją laimėjo: Kazys";
        } elseif ($petrasPoints >= 222) {
            echo " Partiją laimėjo: Petras";
        }
    }
}

// Start the game
playBingo();

?>


echo '<br><br><br>';
<!-- 8. uzduotis -->
<!-- 9. uzduotis -->
<!-- 10. uzduotis -->

<?php

// Function to simulate hammering a nail with small strikes
function smallStrikes($nailLength)
{
    $totalStrikes = 0;
    
    while ($nailLength > 0) {
        $strike = rand(5, 20); // Small strikes: 5-20 mm
        $nailLength -= $strike;
        $totalStrikes++;
    }

    return $totalStrikes;
}

// Function to simulate hammering a nail with large strikes and a chance to miss
function largeStrikes($nailLength)
{
    $totalStrikes = 0;

    while ($nailLength > 0) {
        $strike = rand(20, 30); // Large strikes: 20-30 mm
        $hitProbability = rand(0, 1); // 0 or 1 to simulate 50% chance

        if ($hitProbability) {
            $nailLength -= $strike;
            $totalStrikes++;
        }
    }

    return $totalStrikes;
}

// Simulate hammering 5 small nails
$totalSmallStrikes = 0;

for ($i = 0; $i < 5; $i++) {
    $nailLength = 85; // 8.5 cm = 85 mm
    $totalSmallStrikes += smallStrikes($nailLength);
}

echo "Total small strikes needed for 5 nails: $totalSmallStrikes\n";

// Simulate hammering 5 large nails
$totalLargeStrikes = 0;

for ($i = 0; $i < 5; $i++) {
    $nailLength = 85; // 8.5 cm = 85 mm
    $totalLargeStrikes += largeStrikes($nailLength);
}

echo "Total large strikes needed for 5 nails: $totalLargeStrikes\n";

?>

echo '<br><br><br>';
<!-- 11. uzduotis -->

<?php

// Function to generate a string of unique random numbers
function generateRandomString($length, $min, $max)
{
    $numbers = range($min, $max);
    shuffle($numbers);

    $uniqueNumbers = array_slice($numbers, 0, $length);

    return implode(' ', $uniqueNumbers);
}

// Function to filter and order prime numbers from a string
function filterAndOrderPrimes($inputString)
{
    $numbers = explode(' ', $inputString);
    $primeNumbers = array_filter($numbers, function ($number) {
        return isPrime($number);
    });

    sort($primeNumbers);

    return implode(' ', $primeNumbers);
}

// Function to check if a number is prime
function isPrime($number)
{
    if ($number < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}

// Generate a string of 50 unique random numbers from 1 to 200
$randomString = generateRandomString(50, 1, 200);

// Filter and order prime numbers from the generated string
$primeString = filterAndOrderPrimes($randomString);

// Display the results
echo "Generated Random String: " . $randomString . "\n";
echo "Filtered and Ordered Prime String: " . $primeString . "\n";

?>

