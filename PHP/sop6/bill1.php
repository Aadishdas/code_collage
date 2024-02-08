<?php
if (isset($_POST['submit'])) {
    // Retrieve the 'units' value from the form
    $units = intval($_POST['units']);

    if ($units <= 100) {
        $b = $units * 4;
        echo "Your bill amount is $b"; // Removed the extra dot and quotes
    } else {
        if ($units <= 200) {
            $b = 400 + ($units - 100) * 5; // Added a semicolon at the end of the line
            echo "Your Bill Amount is $b"; // Removed the extra dot and quotes
        } else {
            $b = 400 + 500 + ($units - 200) * 6; // Added a semicolon at the end of the line
            echo "Your Bill Amount is $b"; // Removed the extra dot and quotes
        }
    }
}
?>
