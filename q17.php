<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Print Current Window</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }
    .content {
      margin-bottom: 20px;
      padding: 10px;
      border: 1px solid #ccc;
      background-color: #f9f9f9;
    }
  </style>
</head>
<body>
  <h1>Print Current Window</h1>
  <div class="content">
    <p>This is the content of the current window. Click the button below to print this page.</p>
  </div>
  <button onclick="printWindow()">Print Page</button>

  <script>
    function printWindow() {
      window.print(); // Opens the browser's print dialog for the current window
    }
  </script>
</body>
</html>
