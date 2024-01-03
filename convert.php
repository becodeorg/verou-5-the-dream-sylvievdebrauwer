<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $localRate = test_input($_POST["localRate"]);
    $euros = 0.00024 * $localRate; 

    echo "<h2>Conversion Result:</h2>";
    echo "<p>Price in Euros: € {$euros}</p>";
} else {
    echo "Invalid request";
}

function test_input($input) {
    $input = htmlspecialchars($input); // Sanitize the input
    return $input;
}
?>
