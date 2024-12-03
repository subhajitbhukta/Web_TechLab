<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Palindrome Checker</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }
    .output {
      margin-top: 20px;
      padding: 10px;
      border: 1px solid #ccc;
      background-color: #f9f9f9;
    }
  </style>
</head>
<body>
  <h1>Palindrome Checker</h1>
  <form id="palindromeForm">
    <label for="string">Enter a string:</label>
    <input type="text" id="string" name="string" required>
    <button type="submit">Check</button>
  </form>

  <div id="result" class="output"></div>

  <script>
    function isPalindrome(str) {
      // Remove non-alphanumeric characters and convert to lowercase
      const cleaned = str.replace(/[^A-Za-z0-9]/g, '').toLowerCase();
      // Reverse the cleaned string and compare with the original cleaned string
      return cleaned === cleaned.split('').reverse().join('');
    }

    // Handle form submission
    document.getElementById("palindromeForm").addEventListener("submit", function (e) {
      e.preventDefault(); // Prevent form from refreshing the page
      const inputString = document.getElementById("string").value;
      const result = isPalindrome(inputString)
        ? `"${inputString}" is a palindrome.`
        : `"${inputString}" is not a palindrome.`;
      document.getElementById("result").innerHTML = `<strong>Result:</strong> ${result}`;
    });
  </script>
</body>
</html>
