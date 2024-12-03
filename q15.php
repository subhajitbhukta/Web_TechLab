<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fibonacci Series</title>
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
  <h1>Fibonacci Series Generator</h1>
  <form method="post">
    <label for="terms">Enter Number of Terms:</label>
    <input type="number" id="terms" name="terms" min="1" required>
    <br><br>
    <button type="submit">Generate Series</button>
  </form>

  <div class="output">
    <?php
      if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['terms'])) {
        $terms = intval($_POST['terms']);

        // Function to generate Fibonacci series
        function generateFibonacci($n) {
          $fib = [];
          if ($n >= 1) $fib[] = 0;
          if ($n >= 2) $fib[] = 1;

          for ($i = 2; $i < $n; $i++) {
            $fib[] = $fib[$i - 1] + $fib[$i - 2];
          }
          return $fib;
        }

        $fibonacciSeries = generateFibonacci($terms);
        echo "<h2>Fibonacci Series</h2>";
        echo implode(", ", $fibonacciSeries);
      }
    ?>
  </div>
</body>
</html>
