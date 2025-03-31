<?php

if (isset($_GET['numbers']) && isset($_GET['threshold'])) {
    $numbers = escapeshellarg($_GET['numbers']);
    $threshold = escapeshellarg($_GET['threshold']);

    $command = escapeshellcmd("python3 bitwise_operations.py $numbers $threshold");
    $output = shell_exec($command);

    // Decode JSON output from Python script
    $result = json_decode($output, true);

    if (isset($result['error'])) {
        echo "<h3>Error:</h3>" . $result['error'];
    } else {
        echo "<h3>Results:</h3>";
        echo "Bitwise AND: " . $result['bitwise_and'] . "<br>";
        echo "Bitwise OR: " . $result['bitwise_or'] . "<br>";
        echo "Bitwise XOR: " . $result['bitwise_xor'] . "<br>";
        echo "Numbers greater than threshold: " . implode(", ", $result['filtered_numbers']);
    }
} else {
    echo "Invalid input. Please go back and enter the required values.";
}

?>
