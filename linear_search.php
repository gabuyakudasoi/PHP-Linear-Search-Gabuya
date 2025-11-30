<!DOCTYPE html>
<html>
<head>
    <title>Linear Search</title>
</head>
<body>

<h2>Linear Search in PHP</h2>

<form method="post">
    Enter value to search:
    <input type="text" name="searchValue" required>
    <button type="submit">Search</button>
</form>

<?php

/**
 * Linear Search Function
 * Loops through each element and checks if it matches the target.
 */
function linearSearch($array, $target) {
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] == $target) {
            return $i;
        }
    }
    return -1; // Not found
}

// Only run search when form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Array of 10 elements
    $numbers = [5, 12, 25, 7, 19, 30, 42, 8, 11, 3];

    $target = $_POST["searchValue"];

    $index = linearSearch($numbers, $target);

    if ($index != -1) {
        echo "<p><strong>$target</strong> found at index <strong>$index</strong>.</p>";
    } else {
        echo "<p><strong>$target</strong> not found.</p>";
    }
}

?>

</body>
</html>
