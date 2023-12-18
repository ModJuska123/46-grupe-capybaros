<?php

// Sample JSON file for storing accounts
$accountsFile = 'accounts.json';

// Function to load accounts from JSON file
function loadAccounts() {
    global $accountsFile;
    return json_decode(file_get_contents($accountsFile), true);
}

// Function to save accounts to JSON file
function saveAccounts($accounts) {
    global $accountsFile;
    file_put_contents($accountsFile, json_encode($accounts, JSON_PRETTY_PRINT));
}

// Function to generate a random IBAN
function generateIBAN() {
    return 'LT12' . str_pad(mt_rand(1000, 9999), 8, '0', STR_PAD_LEFT) . mt_rand(100000000, 999999999);
}

// Function to validate personal code
function validatePersonalCode($personalCode) {
    // Add validation logic here
    // Example: Check if it's a valid format
    return preg_match('/^\d{11}$/', $personalCode);
}

// Function to validate name and surname
function validateName($name) {
    // Add validation logic here
    // Example: Check if it's at least 3 characters long
    return strlen($name) >= 3;
}

// Function to create a new account
function createAccount($name, $surname, $personalCode) {
    $accounts = loadAccounts();

    // Validate input data
    if (!validateName($name) || !validateName($surname) || !validatePersonalCode($personalCode)) {
        return 'Invalid input data';
    }

    // Check if the personal code is unique
    foreach ($accounts as $account) {
        if ($account['personal_code'] == $personalCode) {
            return 'Personal code must be unique';
        }
    }

    // Generate a new IBAN
    $iban = generateIBAN();

    // Create a new account
    $newAccount = [
        'name' => $name,
        'surname' => $surname,
        'personal_code' => $personalCode,
        'iban' => $iban,
        'balance' => 0,
    ];

    // Add the new account to the accounts list
    $accounts[] = $newAccount;

    // Save the updated accounts list
    saveAccounts($accounts);

    return 'Account created successfully';
}

// Function to display the list of accounts
function displayAccounts() {
    $accounts = loadAccounts();

    // Sort accounts by surname
    usort($accounts, function ($a, $b) {
        return strcmp($a['surname'], $b['surname']);
    });

    // Display the list
    echo '<ul>';
    foreach ($accounts as $account) {
        echo '<li>' . $account['surname'] . ', ' . $account['name'] . ' - ' . $account['iban'] . '</li>';
    }
    echo '</ul>';
}

// Example usage:
createAccount('John', 'Doe', '12345678901');
displayAccounts();
createAccount('Modestas', 'Juska', '12345677896');
displayAccounts();

?>
