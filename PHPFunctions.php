<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Information Processor</title>
</head>
<body>

<?php

// Function to format timestamp to mm/dd/yyyy
function formatTimestampMDY($timestamp) {
    return date("m/d/Y", $timestamp);
}

// Function to format timestamp to dd/mm/yyyy
function formatTimestampDMY($timestamp) {
    return date("d/m/Y", $timestamp);
}

// Function to process string input
function processString($input) {
    // Trim the string
    $trimmedInput = trim($input);

    // Display the number of characters in the string
    echo "Number of characters in the string: " . strlen($trimmedInput) . "<br>";

    // Display the string as all lowercase characters
    echo "String in lowercase: " . strtolower($trimmedInput) . "<br>";

    // Display whether or not the string contains "DMACC"
    $containsDMACC = stripos($trimmedInput, "dmacc") !== false ? "Yes" : "No";
    echo "Contains 'DMACC': " . $containsDMACC . "<br>";
}

// Function to format a number as a phone number
function formatPhoneNumber($number) {
    return "(".substr($number, 0, 3).") ".substr($number, 3, 3)."-".substr($number, 6);
}

// Function to format a number as US currency
function formatCurrency($number) {
    return "$".number_format($number, 2);
}

// Using the functions
$timestamp = time(); // current timestamp for testing
echo "Timestamp in mm/dd/yyyy format: " . formatTimestampMDY($timestamp) . "<br>";
echo "Timestamp in dd/mm/yyyy format: " . formatTimestampDMY($timestamp) . "<br><br>";

$inputString = "   DMACC is a college   ";
echo "Processing string: '" . $inputString . "'<br>";
processString($inputString);
echo "<br>";

$phoneNumber = 1234567890;
echo "Formatted phone number: " . formatPhoneNumber($phoneNumber) . "<br><br>";

$currencyNumber = 123456;
echo "Formatted currency: " . formatCurrency($currencyNumber) . "<br>";

?>

</body>
</html>
