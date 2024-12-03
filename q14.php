<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Grade Card</title>
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
  <h1>Student Grade Card</h1>
  <form method="post">
    <label for="marks">Enter Marks (0 - 100):</label>
    <input type="number" id="marks" name="marks" min="0" max="100" required>
    <br><br>
    <button type="submit">Get Grade</button>
  </form>

  <div class="output">
    <?php
      if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['marks'])) {
        $marks = intval($_POST['marks']);
        $grade = "";

        switch (true) {
          case ($marks >= 90):
            $grade = "A+";
            break;
          case ($marks >= 80):
            $grade = "A";
            break;
          case ($marks >= 70):
            $grade = "B+";
            break;
          case ($marks >= 60):
            $grade = "B";
            break;
          case ($marks >= 50):
            $grade = "C";
            break;
          case ($marks >= 40):
            $grade = "D";
            break;
          default:
            $grade = "F";
            break;
        }

        echo "<h2>Grade Card</h2>";
        echo "Marks: $marks<br>";
        echo "Grade: $grade";
      }
    ?>
  </div>
</body>
</html>
