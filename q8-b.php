<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial of a Number</title>
</head>
<body>
    <h1>Factorial of a Number</h1>
    <form method="POST" action="">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <button type="submit">Calculate Factorial</button>
    </form>

    <?php
        // Function to calculate factorial
        function factorial($n) {
            if ($n <= 1) {
                return 1;
            } else {
                return $n * factorial($n - 1);
            }
        }

        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number = $_POST['number'];
            
            // Call the factorial function and display the result
            if ($number >= 0) {
                $result = factorial($number);
                echo "<p>The factorial of $number is: $result</p>";
            } else {
                echo "<p>Please enter a non-negative integer.</p>";
            }
        }
    ?>

</body>
</html>
