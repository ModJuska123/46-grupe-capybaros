<?php

function isLithuanianPersonalCodeValid($akId) {
    // Check if the input is numeric and has exactly 11 digits
    if (!is_numeric($akId) || strlen($akId) !== 11) {
        return false;
    }

    // Extract individual digits
    $digits = str_split($akId);

    // Calculate the check sum
    $checksum = $digits[0] * 1 + $digits[1] * 2 + $digits[2] * 3 + $digits[3] * 4 + $digits[4] * 5 +
                $digits[5] * 6 + $digits[6] * 7 + $digits[7] * 8 + $digits[8] * 9 + $digits[9] * 1;

    $remainder = $checksum % 11;

    // Check if the checksum is correct
    if ($remainder === 10) {
        $checksum = $digits[0] * 3 + $digits[1] * 4 + $digits[2] * 5 + $digits[3] * 6 + $digits[4] * 7 +
                    $digits[5] * 8 + $digits[6] * 9 + $digits[7] * 1 + $digits[8] * 2 + $digits[9] * 3;

        $remainder = $checksum % 11;
    }

    return $remainder === intval($digits[10]);
}

// // Example usage
// $personalCode = "12345678901"; // Replace with the actual personal code
// if (isLithuanianPersonalCodeValid($personalCode)) {
//     echo "The Lithuanian personal identification number is valid.";
// } else {
//     echo "The Lithuanian personal identification number is invalid.";
// }

// ?>

