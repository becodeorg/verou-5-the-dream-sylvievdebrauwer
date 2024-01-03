<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the local currency rate from the form data
    $localRate = floatval($_POST["localRate"]);

    $euros = 0,00024 / $localRate; 

    echo "<p>Price in Euros: {$euros}</p>";
} else {
    echo "Invalid request";
}
?>
