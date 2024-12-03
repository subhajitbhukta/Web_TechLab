<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body>
    <h2>User Registration Form</h2>
    <?php
    // Initialize variables for error messages and form data
    $emailErr = $usernameErr = $passwordErr = "";
    $email = $username = $password = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Email validation
        if (empty($_POST["email"])) {
            $emailErr = "Email is required.";
        } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format.";
        } else {
            $email = htmlspecialchars($_POST["email"]);
        }

        // Username validation
        if (empty($_POST["username"])) {
            $usernameErr = "Username is required.";
        } elseif (!preg_match("/^[a-zA-Z0-9]*$/", $_POST["username"])) {
            $usernameErr = "Only letters and numbers are allowed.";
        } else {
            $username = htmlspecialchars($_POST["username"]);
        }

        // Password validation
        if (empty($_POST["password"])) {
            $passwordErr = "Password is required.";
        } elseif (strlen($_POST["password"]) < 6) {
            $passwordErr = "Password must be at least 6 characters long.";
        } else {
            $password = htmlspecialchars($_POST["password"]);
        }

        // If no errors, display a success message
        if (empty($emailErr) && empty($usernameErr) && empty($passwordErr)) {
            echo "<p style='color: green;'>Form submitted successfully!</p>";
            echo "<p>Email: $email</p>";
            echo "<p>Username: $username</p>";
        }
    }
    ?>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>
        <span style="color: red;"><?php echo $emailErr; ?></span>
        <br><br>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="<?php echo $username; ?>" required>
        <span style="color: red;"><?php echo $usernameErr; ?></span>
        <br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <span style="color: red;"><?php echo $passwordErr; ?></span>
        <br><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>
