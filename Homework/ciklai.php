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

// if (i % 77 == 0) return i else return null;


echo '<br>';
// 4. uzdavinys

<!DOCTYPE html>
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