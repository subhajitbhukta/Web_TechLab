<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Checker</title>
    <script>
        // JavaScript function to check if a string is a palindrome
        function isPalindrome() {
            // Get the input value
            const inputString = document.getElementById("stringInput").value.trim();

            // Check if the string is empty
            if (inputString === "") {
                alert("Please enter a string!");
                return false;
            }

            // Remove non-alphanumeric characters and convert to lowercase
            const cleanedString = inputString.replace(/[^a-zA-Z0-9]/g, "").toLowerCase();

            // Check if the cleaned string is equal to its reverse
            const isPalin = cleanedString === cleanedString.split("").reverse().join("");

            // Display the result
            const resultDiv = document.getElementById("result");
            if (isPalin) {
                resultDiv.innerHTML = `<p style="color: green;">"${inputString}" is a palindrome.</p>`;
            } else {
                resultDiv.innerHTML = `<p style="color: red;">"${inputString}" is not a palindrome.</p>`;
            }

            return false; // Prevent form submission
        }
    </script>
</head>
<body>
    <h2>Palindrome Checker</h2>

    <!-- HTML Form -->
    <form onsubmit="return isPalindrome();">
        <label for="stringInput">Enter a String:</label>
        <input type="text" id="stringInput" name="stringInput" required>
        <br><br>
        <button type="submit">Check</button>
    </form>

    <!-- Result Display -->
    <div id="result"></div>
</body>
</html>
