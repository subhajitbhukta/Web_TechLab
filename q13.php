<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Print Patterns with PHP</title>
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
  <h1>Print Patterns with PHP</h1>
  <form method="post">
    <button type="submit" name="pattern" value="a">Print Pattern A</button>
    <button type="submit" name="pattern" value="b">Print Pattern B</button>
  </form>

  <div class="output">
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['pattern'])) {
      $pattern = $_POST['pattern'];
      if ($pattern == 'a') {
        echo "<h2>Pattern A</h2>";
        for ($i = 1; $i <= 5; $i++) {
          echo str_repeat("*", $i) . "<br>";
        }
      } elseif ($pattern == 'b') {
        echo "<h2>Pattern B</h2>";

        $m = 5;
        for ($i = 0; $i < 5; $i++) {
          for ($j = 0; $j < $i; $j++) {
            echo "&nbsp;";
          }
          for ($k = 0; $k < $m; $k++) {
            echo "*";
          }
          $m = $m - 1;
          echo "<br>";
        }

      }
    }
    ?>
  </div>
</body>

</html>