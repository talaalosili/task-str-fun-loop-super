<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputString = $_POST['inputString'];
    $numericString = $_POST['numericString'];
    $wordToCheck = $_POST['wordToCheck'];

    // Convert the string to uppercase
    $upperCase = strtoupper($inputString);

    // Convert the string to lowercase
    $lowerCase = strtolower($inputString);

    // Make the first letter of the string uppercase
    $firstLetterUpperCase = ucfirst($inputString);

    // Make the first letter of each word capitalized
    $wordsCapitalized = ucwords($inputString);

    // Convert the numeric string to a date format
    if (strlen($numericString) == 8 && is_numeric($numericString)) {
        // Extract the year, month, and day from the numeric string
        $year = substr($numericString, 0, 4);
        $month = substr($numericString, 4, 2);
        $day = substr($numericString, 6, 2);

        // Format the date
        $formattedDate = $year . '-' . $month . '-' . $day;
    } else {
        $formattedDate = "Please enter a valid 8-digit numeric string.";
    }

    // Check if the sentence contains a specific word
    if (stripos($inputString, $wordToCheck) !== false) {
        $wordCheckResult = "The word '$wordToCheck' was found in the sentence.";
    } else {
        $wordCheckResult = "The word '$wordToCheck' was not found in the sentence.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>String and Date Processing in PHP</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label>Enter a string:</label>
        <input type="text" name="inputString"><br><br>
        <label>Enter an 8-digit numeric string:</label>
        <input type="text" name="numericString"><br><br>
        <label>Enter a word to check:</label>
        <input type="text" name="wordToCheck"><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h3>String Manipulation Results:</h3>";
        echo "Original String: " . htmlspecialchars($inputString) . "<br>";
        echo "Uppercase: " . htmlspecialchars($upperCase) . "<br>";
        echo "Lowercase: " . htmlspecialchars($lowerCase) . "<br>";
        echo "First letter uppercase: " . htmlspecialchars($firstLetterUpperCase) . "<br>";
        echo "Each word capitalized: " . htmlspecialchars($wordsCapitalized) . "<br>";

        echo "<h3>Date Conversion Result:</h3>";
        echo "Original Numeric String: " . htmlspecialchars($numericString) . "<br>";
        echo "Formatted Date: " . htmlspecialchars($formattedDate) . "<br>";

        echo "<h3>Word Check Result:</h3>";
        echo htmlspecialchars($wordCheckResult) . "<br>";
    }
    ?>
</body>
</html>