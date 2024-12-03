<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
</head>
<body>
    <h2>PHP Calculator</h2>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="num1">Number 1:</label>
        <input type="number" id="num1" name="num1" required>
        <br><br>

        <label for="num2">Number 2:</label>
        <input type="number" id="num2" name="num2" required>
        <br><br>

        <label for="operation">Choose an Operation:</label>
        <select id="operation" name="operation" required>
            <option value="add">Addition (+)</option>
            <option value="subtract">Subtraction (-)</option>
            <option value="multiply">Multiplication (*)</option>
            <option value="divide">Division (/)</option>
        </select>
        <br><br>

        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form inputs
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];
        $result = "";

        // Perform calculation based on the selected operation
        switch ($operation) {
            case "add":
                $result = $num1 + $num2;
                break;
            case "subtract":
                $result = $num1 - $num2;
                break;
            case "multiply":
                $result = $num1 * $num2;
                break;
            case "divide":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Error: Division by zero!";
                }
                break;
            default:
                $result = "Invalid operation selected.";
        }

        // Display the result
        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>
</html>
