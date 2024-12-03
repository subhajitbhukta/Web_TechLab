<?php
// Initialize variables
$evenOddResult = '';
$leapYearResult = '';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the number is even or odd
    if (isset($_POST['number'])) {
        $number = $_POST['number'];
        $evenOddResult = ($number % 2 == 0) ? "$number is Even" : "$number is Odd";
    }

    // Check if the year is leap year or not
    if (isset($_POST['year'])) {
        $year = $_POST['year'];
        if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
            $leapYearResult = "$year is a Leap Year";
        } else {
            $leapYearResult = "$year is not a Leap Year";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even/Odd and Leap Year Checker</title>
</head>
<body>

<h2>Check Even or Odd Number and Leap Year</h2>

<form method="POST">
    <label for="number">Enter a Number:</label>
    <input type="number" id="number" name="number" required>
    <br><br>

    <label for="year">Enter a Year:</label>
    <input type="number" id="year" name="year" required>
    <br><br>

    <button type="submit">Submit</button>
</form>

<?php
// Display the results
if ($evenOddResult) {
    echo "<p>$evenOddResult</p>";
}
if ($leapYearResult) {
    echo "<p>$leapYearResult</p>";
}
?>

</body>
</html>
