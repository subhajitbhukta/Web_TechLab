<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            max-width: 500px;
        }
        label {
            font-weight: bold;
        }
        .error {
            color: red;
            font-size: 0.9em;
        }
        .success {
            color: green;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h2>Registration Form</h2>

    <?php
    // Initialize error messages and input variables
    $errors = [];
    $inputs = [
        "name" => "", "email" => "", "contact_number" => "", "city" => "", "description" => ""
    ];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Sanitize and validate inputs
        foreach ($inputs as $key => &$value) {
            $value = htmlspecialchars(trim($_POST[$key]));
        }

        // Validate Name
        if (empty($inputs["name"])) {
            $errors["name"] = "Name is required.";
        } elseif (!preg_match("/^[a-zA-Z\s]+$/", $inputs["name"])) {
            $errors["name"] = "Name can only contain letters and spaces.";
        }

        // Validate Email
        if (empty($inputs["email"])) {
            $errors["email"] = "Email is required.";
        } elseif (!filter_var($inputs["email"], FILTER_VALIDATE_EMAIL)) {
            $errors["email"] = "Invalid email format.";
        }

        // Validate Contact Number
        if (empty($inputs["contact_number"])) {
            $errors["contact_number"] = "Contact number is required.";
        } elseif (!preg_match("/^\d{10}$/", $inputs["contact_number"])) {
            $errors["contact_number"] = "Contact number must be a 10-digit number.";
        }

        // Validate City
        if (empty($inputs["city"])) {
            $errors["city"] = "City is required.";
        }

        // Validate Description
        if (empty($inputs["description"])) {
            $errors["description"] = "Description is required.";
        } elseif (strlen($inputs["description"]) > 500) {
            $errors["description"] = "Description must not exceed 500 characters.";
        }

        // Display success message if no errors
        if (empty($errors)) {
            echo "<p class='success'>Form submitted successfully!</p>";
            foreach ($inputs as $key => $value) {
                echo "<p><strong>" . ucfirst(str_replace("_", " ", $key)) . ":</strong> $value</p>";
            }
        }
    }
    ?>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="<?php echo $inputs['name']; ?>" required>
        <span class="error"><?php echo $errors["name"] ?? ""; ?></span>
        <br><br>

        <label for="email">Email ID:</label><br>
        <input type="email" id="email" name="email" value="<?php echo $inputs['email']; ?>" required>
        <span class="error"><?php echo $errors["email"] ?? ""; ?></span>
        <br><br>

        <label for="contact_number">Contact Number:</label><br>
        <input type="text" id="contact_number" name="contact_number" value="<?php echo $inputs['contact_number']; ?>" required>
        <span class="error"><?php echo $errors["contact_number"] ?? ""; ?></span>
        <br><br>

        <label for="city">City:</label><br>
        <input type="text" id="city" name="city" value="<?php echo $inputs['city']; ?>" required>
        <span class="error"><?php echo $errors["city"] ?? ""; ?></span>
        <br><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description" rows="4" maxlength="500" required><?php echo $inputs['description']; ?></textarea>
        <span class="error"><?php echo $errors["description"] ?? ""; ?></span>
        <br><br>

        <button type="reset">Reset</button>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
