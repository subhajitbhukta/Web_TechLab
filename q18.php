<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reverse a Number</title>
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
  <h1>Reverse a Number</h1>
  <form id="reverseForm">
    <label for="number">Enter a number:</label>
    <input type="number" id="number" name="number" required>
    <button type="submit">Reverse</button>
  </form>

  <div id="result" class="output"></div>

  <script>
    function reverseNumber(num) {
      // Convert number to string, split into characters, reverse them, and join back into a string
      return parseInt(num.toString().split("").reverse().join("")) * Math.sign(num);
    }

    // Handle form submission
    document.getElementById("reverseForm").addEventListener("submit", function (e) {
      e.preventDefault(); // Prevent form from refreshing the page
      const number = document.getElementById("number").value;
      const reversed = reverseNumber(number);
      document.getElementById("result").innerHTML = `<strong>Reversed Number:</strong> ${reversed}`;
    });
  </script>
</body>
</html>
