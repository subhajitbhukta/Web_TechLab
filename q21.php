<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Check if Input is an Array</title>
</head>
<body>
  <h1>Check if Input is an Array</h1>
  <div id="result"></div>

  <script>
    function is_array(input) {
      return Array.isArray(input);
    }

    // Test data
    console.log(is_array('www.hit.in')); // Expected Output: false
    console.log(is_array([1, 2, 4, 0])); // Expected Output: true

    // Display results on the webpage
    const resultDiv = document.getElementById("result");
    resultDiv.innerHTML = `
      <p>Test 1 (String 'www.hit.in'): ${is_array('www.hit.in')}</p>
      <p>Test 2 (Array [1, 2, 4, 0]): ${is_array([1, 2, 4, 0])}</p>
    `;
  </script>
</body>
</html>
