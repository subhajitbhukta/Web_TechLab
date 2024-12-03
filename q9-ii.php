<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GCD Using Recursion</title>
    <script>
        // Recursive function to find GCD
        function gcd(a, b) {
            if (b === 0) {
                return a; // Base case: if b is 0, GCD is a
            }
            return gcd(b, a % b); // Recursive case
        }

        // Function to get input and display the result
        function calculateGCD() {
            const num1 = parseInt(document.getElementById("number1").value);
            const num2 = parseInt(document.getElementById("number2").value);

            if (num1 <= 0 || num2 <= 0) {
                alert("Please enter positive numbers only!");
                return;
            }

            const result = gcd(num1, num2);
            document.getElementById("resultGCD").innerText = `GCD of ${num1} and ${num2} is: ${result}`;
        }
    </script>
</head>
<body>
    <h2>GCD Calculator</h2>
    <form onsubmit="return false;">
        <label for="number1">Enter the first number:</label>
        <input type="number" id="number1" min="1" required>
        <br><br>
        <label for="number2">Enter the second number:</label>
        <input type="number" id="number2" min="1" required>
        <br><br>
        <button type="button" onclick="calculateGCD()">Calculate GCD</button>
    </form>
    <div id="resultGCD" style="margin-top: 20px;"></div>
</body>
</html>
