<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find the Largest Number</title>
</head>
<body>
    <h2>Find the Largest Among Three Numbers</h2>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="num1">Number 1:</label>
        <input type="number" id="num1" name="num1" required>
        <br><br>

        <label for="num2">Number 2:</label>
        <input type="number" id="num2" name="num2" required>
        <br><br>

        <label for="num3">Number 3:</label>
        <input type="number" id="num3" name="num3" required>
        <br><br>

        <input type="submit" name="submit" value="Find Largest">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form inputs
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $num3 = $_POST["num3"];

        // Method (a): Using if-else
        $largestIfElse = $num1;
        if ($num2 > $largestIfElse) {
            $largestIfElse = $num2;
        }
        if ($num3 > $largestIfElse) {
            $largestIfElse = $num3;
        }

        // Method (b): Using conditional operator
        $largestConditional = ($num1 > $num2) 
            ? (($num1 > $num3) ? $num1 : $num3) 
            : (($num2 > $num3) ? $num2 : $num3);

        echo "<h3>Results:</h3>";
        echo "<p>Largest (using if-else): $largestIfElse</p>";
        echo "<p>Largest (using conditional operator): $largestConditional</p>";
    }
    ?>
</body>
</html>
