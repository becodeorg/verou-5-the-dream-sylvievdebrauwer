<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $localRate = test_input($_POST["localRate"]);
    $currencyType = $_POST["currencyType"];

    $conversionRates = [
        'euro' => 0.00024,
        'dollar' => 0.018,
    ];

    if (isset($conversionRates[$currencyType])) {
        $conversionRate = $conversionRates[$currencyType];
        $convertedAmount = $localRate * $conversionRate;

        echo "<h2 class='conversion-result'>Conversion Result:</h2>";
        echo "<p class='converted-amount'>Price in {$currencyType}: {$convertedAmount} {$currencyType}</p>";
    } else {
        echo "Invalid currency type";
    }
} else {
    echo "Invalid request";
}

function test_input($input) {
    $input = htmlspecialchars($input); // Sanitize the input
    return $input;
}
?>
