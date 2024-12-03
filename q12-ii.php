<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Find Larger of Two Integers</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }
    .output {
      margin-top: 10px;
      padding: 10px;
      border: 1px solid #ccc;
      background-color: #f9f9f9;
    }
  </style>
</head>
<body>
  <h1>Find Larger of Two Integers</h1>
  <form id="compareNumbersForm">
    <label for="number1">Enter First Number:</label>
    <input type="number" id="number1" required>
    <br><br>
    <label for="number2">Enter Second Number:</label>
    <input type="number" id="number2" required>
    <br><br>
    <button type="submit">Compare</button>
  </form>
  <div id="largerNumberResult" class="output"></div>

  <script>
    document.getElementById("compareNumbersForm").addEventListener("submit", (event) => {
      event.preventDefault(); // Prevent form submission

      let num1 = parseInt(document.getElementById("number1").value);
      let num2 = parseInt(document.getElementById("number2").value);

      let result;
      if (num1 > num2) {
        result = `${num1} is larger than ${num2}`;
      } else if (num2 > num1) {
        result = `${num2} is larger than ${num1}`;
      } else {
        result = "Both numbers are equal.";
      }

      document.getElementById("largerNumberResult").innerText = result;
    });
  </script>
</body>
</html>
