<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Current Day and Time</title>
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
  <h1>Current Day and Time</h1>
  <div id="dateTimeDisplay" class="output"></div>

  <script>
    function displayDateTime() {
      const days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
      const now = new Date();

      // Get day of the week
      const day = days[now.getDay()];

      // Get hours, minutes, and seconds
      let hours = now.getHours();
      const minutes = now.getMinutes();
      const seconds = now.getSeconds();

      // Determine AM/PM and adjust hours
      const period = hours >= 12 ? "PM" : "AM";
      hours = hours % 12 || 12;

      // Display formatted day and time
      const formattedTime = `Today is : ${day}.<br>Current time is : ${hours} ${period} : ${minutes.toString().padStart(2, "0")} : ${seconds.toString().padStart(2, "0")}`;
      document.getElementById("dateTimeDisplay").innerHTML = formattedTime;
    }

    // Call the function to display the date and time
    displayDateTime();

    // Update the time every second
    setInterval(displayDateTime, 1000);
  </script>
</body>
</html>
