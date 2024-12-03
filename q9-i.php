<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Using Recursion</title>
    <script>
        // Recursive function to calculate factorial
        function factorial(n) {
            if (n < 0) {
                return "Factorial is not defined for negative numbers.";
            }
            if (n === 0 || n === 1) {
                return 1; // Base case
            }
            return n * factorial(n - 1); // Recursive case
        }

        // Function to get input and display the result
        function calculateFactorial() {
            const num = parseInt(document.getElementById("numberInput").value);
            const result = factorial(num);
            document.getElementById("resultFactorial").innerText = `Factorial of ${num} is: ${result}`;
        }
    </script>
</head>
<body>
    <h2>Factorial Calculator</h2>
    <form onsubmit="return false;">
        <label for="numberInput">Enter a number:</label>
        <input type="number" id="numberInput" min="0" required>
        <button type="button" onclick="calculateFactorial()">Calculate Factorial</button>
    </form>
    <div id="resultFactorial" style="margin-top: 20px;"></div>
</body>
</html>
