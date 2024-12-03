<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Find the Larger Integer</title>
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
  <h1>Find the Larger Integer</h1>
  <form id="compareForm">
    <label for="num1">Enter first integer:</label>
    <input type="number" id="num1" name="num1" required>
    <br><br>
    <label for="num2">Enter second integer:</label>
    <input type="number" id="num2" name="num2" required>
    <br><br>
    <button type="submit">Compare</button>
  </form>

  <div id="result" class="output"></div>

  <script>
    function findLargerNumber(num1, num2) {
      if (num1 > num2) {
        return num1;
      } else if (num2 > num1) {
        return num2;
      } else {
        return "Both numbers are equal";
      }
    }

    // Handle form submission
    document.getElementById("compareForm").addEventListener("submit", function (e) {
      e.preventDefault(); // Prevent form from refreshing the page
      const num1 = parseInt(document.getElementById("num1").value);
      const num2 = parseInt(document.getElementById("num2").value);
      const largerNumber = findLargerNumber(num1, num2);
      document.getElementById("result").innerHTML = `<strong>Larger number:</strong> ${largerNumber}`;
    });
  </script>
</body>
</html>
