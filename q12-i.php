<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sort 50 Natural Numbers</title>
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
    <h1>Sort 50 Natural Numbers</h1>
    <div id="numbers" class="output"></div>
    <button id="sortNumbers">Sort Numbers</button>
    <div id="sortedNumbers" class="output"></div>

    <script>
        let naturalNumbers = Array.from({ length: 50 }, (_, i) => i + 1);
        for (let i = naturalNumbers.length - 1; i > 0; i--) {
            let j = Math.floor(Math.random() * (i + 1));
            [naturalNumbers[i], naturalNumbers[j]] = [naturalNumbers[j], naturalNumbers[i]];
        }

        let naturalNumbersCopy = [...naturalNumbers]
        document.getElementById("numbers").innerText = `Numbers: ${naturalNumbersCopy.join(", ")}`;
        
        document.getElementById("sortNumbers").addEventListener("click", () => {
            // Shuffle the array

            // Sort the array
            naturalNumbers.sort((a, b) => a - b);

            // Display the result
            document.getElementById("sortedNumbers").innerText = `Sorted Numbers: ${naturalNumbers.join(", ")}`;
        });
    </script>
</body>

</html>