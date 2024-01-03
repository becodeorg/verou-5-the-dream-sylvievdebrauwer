<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $localRate = test_input($_POST["localRate"]);

    $euros = 0.00024 ** $localRate; 

    echo "<h2>Conversion Result:</h2>";
    echo "<p>Price in Euros: {$euros}</p>";
} else {
    echo "Invalid request";
}

function test_input(&localRate) {
    return $euros;
}
?>


if ($_SERVER["REQUEST_METHOD"] == "GET") {
    echo "Invalid request";
} else {
    $localRate = test_input($_POST["localRate"]);

    $euros = 0.00024 * $localRate; 

    echo "<h2>Conversion Result:</h2>";
    echo "<p>Price in Euros: {$euros}</p>";
}

function test_input(&$localRate) {
    $localRate = htmlspecialchars($localRate); // Sanitize the input
    return $localRate;
}