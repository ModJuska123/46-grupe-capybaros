<!-- 1 uzduotis -->

<?php

function wrapInH1Tag($text) {     // Escape the text to prevent XSS attacks

    $escapedText = htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
    
    // Wrap the text in an h1 tag
    $result = "<h1>{$escapedText}</h1>";
    
    return $result;
}

// Example usage:
$textToInsert = "Hello, World!";
$resultingHTML = wrapInH1Tag($textToInsert);

echo $resultingHTML;
echo "<br><br><br>";
?>

<!-- 2. usduotis -->

<?php

function insertTextInHTag($text, $tagNumber) {
    // Validate the tag number to be between 1 and 6
    $validatedTagNumber = max(1, min(6, $tagNumber));

      $escapedText = htmlspecialchars($text, ENT_QUOTES, 'UTF-8');

    // Wrap the text in the specified h tag
    $result = "<h{$validatedTagNumber}>{$escapedText}</h{$validatedTagNumber}>";
    
    return $result;
}

// usage:
$textToInsert = "Hello, World!";
$tagNumber = 3; // You can change this to any number between 1 and 6

$resultingHTML = insertTextInHTag($textToInsert, $tagNumber);

echo $resultingHTML;

?>

echo "<br><br><br><br>";
<!-- 3 uzdavinys ----------------->

<?php

function replaceCallback($matches) {
    // Check if the matched string is a sequence of digits
    if (ctype_digit($matches[0])) {
        // Wrap digits in <h1> tags
        return '<h1>' . $matches[0] . '</h1>';
    } else {
        // Keep non-digit characters as they are
        return $matches[0];
    }
}

// Generate a random string using md5(time())
$randomString = md5(time());

// Use preg_replace_callback to apply the replacement
$resultString = preg_replace_callback('/\d+/', 'replaceCallback', $randomString);

// Output the result
echo $resultString;
echo "<br><br><br>";
?>

<!-- 4. uzduotis -->

<?php

function countDivisors($number) {
    // Check if the input is a valid integer
    if (!is_int($number)) {
        echo "Error: Input must be an integer.\n";
        return;
    }

    // Initialize a counter for divisors
    $divisorCount = 0;

    // Iterate from 2 to the square root of the number
    for ($i = 2; $i <= sqrt($number); $i++) {
        // Check if $i is a divisor
        if ($number % $i == 0) {
            // Increment the divisor count
            $divisorCount++;

            // If $i and $number/$i are different, increment the count again
            if ($i != $number / $i) {
                $divisorCount++;
            }
        }
    }

    // Return the total count of divisors
    return $divisorCount;
}

// Example usage:
$number = 100;
$result = countDivisors($number);

if (is_numeric($result)) {
    echo "Number of divisors for $number (excluding 1 and itself): $result\n";
}
echo "<br><br><br>";
?>

<!-- 5. uzduotis -->

<?php

// Function to generate random array
function generateRandomArray($size, $min, $max) {
    $array = [];
    for ($i = 0; $i < $size; $i++) {
        $array[] = mt_rand($min, $max);
    }
    return $array;
}

// Function to sort array based on remainder when divided by a divisor
function sortByRemainder($a, $b, $divisor) {
    $remainderA = $a % $divisor;
    $remainderB = $b % $divisor;

    // Sort in descending order based on remainder
    return $remainderB - $remainderA;
}

// Generate an array of 100 elements with random values between 33 and 77
$size = 100;
$minValue = 33;
$maxValue = 77;
$array = generateRandomArray($size, $minValue, $maxValue);

// Choose a random divisor for sorting
$divisor = mt_rand(2, 10);

// Sort the array based on remainder when divided by the chosen divisor
usort($array, function ($a, $b) use ($divisor) {
    return sortByRemainder($a, $b, $divisor);
});

// Output the original and sorted arrays
echo "Original Array:\n";
print_r($array) . "<br><br>";

echo "\nSorted Array (based on remainder when divided by $divisor):\n";
print_r($array);

echo "<br><br><br>";
?>

<!-- 6. uzduotis -->

<?php

// Function to check if a number is prime
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

// Function to generate an array of random numbers between 333 and 777
function generateRandomArray33($length) {
    $randomArray = [];
    for ($i = 0; $i < $length; $i++) {
        $randomArray[] = mt_rand(333, 777);
    }
    return $randomArray;
}

// Generate an array of 100 random numbers
$randomNumbers = generateRandomArray33(100);

// Filter out prime numbers from the array
$nonPrimeNumbers = array_filter($randomNumbers, function ($number) {
    return !isPrime($number);
});

// Print the original array
echo "Original Array:\n";
print_r($randomNumbers);

// Print the array without prime numbers
echo "\nArray without Prime Numbers:\n";
print_r($nonPrimeNumbers);

?>
