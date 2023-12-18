<?php

// Functions for working with JSON data
function readJsonData($filename)
{
    if (file_exists($filename)) {
        $json_data = file_get_contents($filename);
        return json_decode($json_data, true);
    } else {
        return [];
    }
}

function writeJsonData($filename, $data)
{
    $json_data = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents($filename, $json_data);
}

// Function to generate a random IBAN number
function generateIBAN()
{
    return 'LT' . rand(10, 99) . '0000' . rand(1000, 9999) . rand(1000, 9999) . rand(1000, 9999);
}

// Function to validate personal code
function validatePersonalCode($personalCode)
{
    // Add your validation logic here
    return true;
}

// Load existing bank data
$bankData = readJsonData('bank_data.json');

// Check if the user is logged in (for simplicity, no real authentication)
$isLoggedIn = isset($_SESSION['user']);

// Handle different pages
if (isset($_GET['page'])) {
    $page = $_GET['page'];

    switch ($page) {
        case 'account_list':
            // Display a list of accounts
            // Sort accounts by owner's last name
            ksort($bankData);
            // Add HTML code to display the account list
            break;

        case 'add_funds':
            // Display the "add funds" page
            // Add HTML code to display the form for adding funds
            break;

        case 'deduct_funds':
            // Display the "deduct funds" page
            // Add HTML code to display the form for deducting funds
            break;

        case 'create_account':
            // Display the "create account" page
            // Add HTML code to display the form for creating a new account
            break;

        default:
            // Handle other cases or display an error page
            break;
    }
} elseif (isset($_POST['action'])) {
    // Handle form submissions
    $action = $_POST['action'];

    switch ($action) {
        case 'create_account':
            // Validate input data
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $personalCode = $_POST['personal_code'];

            if (strlen($name) > 3 && strlen($surname) > 3 && validatePersonalCode($personalCode)) {
                // Generate a unique IBAN and create a new account
                $iban = generateIBAN();
                $bankData[$iban] = [
                    'owner' => "$name $surname",
                    'balance' => 0,
                    'personal_code' => $personalCode,
                ];
                writeJsonData('bank_data.json', $bankData);
                echo "Account created successfully!";
            } else {
                echo "Invalid input data!";
            }
            break;

        case 'add_funds':
            // Validate input data
            $iban = $_POST['iban'];
            $amount = $_POST['amount'];

            if (isset($bankData[$iban]) && is_numeric($amount) && $amount > 0) {
                // Update account balance
                $bankData[$iban]['balance'] += $amount;
                writeJsonData('bank_data.json', $bankData);
                echo "Funds added successfully!";
            } else {
                echo "Invalid input data!";
            }
            break;

        case 'deduct_funds':
            // Validate input data
            $iban = $_POST['iban'];
            $amount = $_POST['amount'];

            if (isset($bankData[$iban]) && is_numeric($amount) && $amount > 0 && $bankData[$iban]['balance'] >= $amount) {
                // Update account balance
                $bankData[$iban]['balance'] -= $amount;
                writeJsonData('bank_data.json', $bankData);
                echo "Funds deducted successfully!";
            } else {
                echo "Invalid input data!";
            }
            break;

        default:
            // Handle other cases or display an error page
            break;
    }
} else {
    // Display the default page or redirect to the login page
    // Add HTML code for the default page
}

?>
