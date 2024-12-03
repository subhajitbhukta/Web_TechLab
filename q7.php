<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Combinations</title>
    <script>
        // Function to generate all combinations of a string
        function generateCombinations() {
            // Get the input string
            const inputString = document.getElementById("stringInput").value.trim();

            // Validate input
            if (inputString === "") {
                alert("Please enter a valid string!");
                return;
            }

            // Array to store combinations
            let combinations = [];

            // Generate all combinations
            for (let i = 0; i < inputString.length; i++) {
                for (let j = i + 1; j <= inputString.length; j++) {
                    combinations.push(inputString.slice(i, j));
                }
            }

            // Display the result
            document.getElementById("result").innerHTML = 
                `<strong>Combinations:</strong> ${combinations.join(", ")}`;
        }
    </script>
</head>
<body>
    <h2>String Combinations Generator</h2>

    <!-- HTML Form -->
    <form onsubmit="return false;">
        <label for="stringInput">Enter a String:</label>
        <input type="text" id="stringInput" name="stringInput" required>
        <br><br>
        <button type="button" onclick="generateCombinations()">Generate Combinations</button>
    </form>

    <!-- Result Display -->
    <div id="result" style="margin-top: 20px; font-size: 1.2em;"></div>
</body>
</html>
