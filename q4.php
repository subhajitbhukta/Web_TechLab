<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <h2>Registration Form</h2>

    <?php
    // Initialize error messages and input variables
    $errors = [];
    $inputs = [
        "name" => "", "father_name" => "", "postal_address" => "", "personal_address" => "",
        "sex" => "", "city" => "", "course" => "", "district" => "", "state" => "",
        "pincode" => "", "emailid" => "", "dos" => "", "mobile_no" => ""
    ];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Sanitize and validate inputs
        foreach ($inputs as $key => &$value) {
            $value = htmlspecialchars(trim($_POST[$key]));
        }

        if (empty($inputs["name"])) $errors["name"] = "Name is required.";
        if (empty($inputs["father_name"])) $errors["father_name"] = "Father's Name is required.";
        if (empty($inputs["postal_address"])) $errors["postal_address"] = "Postal Address is required.";
        if (empty($inputs["personal_address"])) $errors["personal_address"] = "Personal Address is required.";
        if (empty($inputs["sex"])) $errors["sex"] = "Sex is required.";
        if (empty($inputs["city"])) $errors["city"] = "City is required.";
        if (empty($inputs["course"])) $errors["course"] = "Course is required.";  
        if (empty($inputs["district"])) $errors["district"] = "District is required.";
        if (empty($inputs["state"])) $errors["state"] = "State is required.";
        if (empty($inputs["pincode"]) || !ctype_digit($inputs["pincode"]) || strlen($inputs["pincode"]) != 6) 
            $errors["pincode"] = "Valid 6-digit Pincode is required.";
        if (empty($inputs["emailid"]) || !filter_var($inputs["emailid"], FILTER_VALIDATE_EMAIL)) 
            $errors["emailid"] = "Valid Email ID is required.";
        if (empty($inputs["dos"])) $errors["dos"] = "Date of Submission is required.";
        if (empty($inputs["mobile_no"]) || !preg_match("/^\d{10}$/", $inputs["mobile_no"])) 
            $errors["mobile_no"] = "Valid 10-digit Mobile Number is required.";

        // Display success message if no errors
        if (empty($errors)) {
            echo "<h3>Form submitted successfully!</h3>";
            foreach ($inputs as $key => $value) {
                echo "<p><strong>" . ucfirst(str_replace("_", " ", $key)) . ":</strong> $value</p>";
            }
        }
    }
    ?>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $inputs['name']; ?>" required>
        <span style="color: red;"><?php echo $errors["name"] ?? ""; ?></span>
        <br><br>

        <label for="father_name">Father's Name:</label>
        <input type="text" id="father_name" name="father_name" value="<?php echo $inputs['father_name']; ?>" required>
        <span style="color: red;"><?php echo $errors["father_name"] ?? ""; ?></span>
        <br><br>

        <label for="postal_address">Postal Address:</label>
        <textarea id="postal_address" name="postal_address" required><?php echo $inputs['postal_address']; ?></textarea>
        <span style="color: red;"><?php echo $errors["postal_address"] ?? ""; ?></span>
        <br><br>

        <label for="personal_address">Personal Address:</label>
        <textarea id="personal_address" name="personal_address" required><?php echo $inputs['personal_address']; ?></textarea>
        <span style="color: red;"><?php echo $errors["personal_address"] ?? ""; ?></span>
        <br><br>

        <label>Sex:</label>
        <input type="radio" id="male" name="sex" value="Male" <?php if ($inputs['sex'] == 'Male') echo "checked"; ?> required> Male
        <input type="radio" id="female" name="sex" value="Female" <?php if ($inputs['sex'] == 'Female') echo "checked"; ?> required> Female
        <span style="color: red;"><?php echo $errors["sex"] ?? ""; ?></span>
        <br><br>

        <label for="city">City:</label>
        <input type="text" id="city" name="city" value="<?php echo $inputs['city']; ?>" required>
        <span style="color: red;"><?php echo $errors["city"] ?? ""; ?></span>
        <br><br>

        <label for="course">Course:</label>
        <input type="text" id="course" name="course" value="<?php echo $inputs['course']; ?>" required>
        <span style="color: red;"><?php echo $errors["course"] ?? ""; ?></span>
        <br><br>

        <label for="district">District:</label>
        <input type="text" id="district" name="district" value="<?php echo $inputs['district']; ?>" required>
        <span style="color: red;"><?php echo $errors["district"] ?? ""; ?></span>
        <br><br>

        <label for="state">State:</label>
        <input type="text" id="state" name="state" value="<?php echo $inputs['state']; ?>" required>
        <span style="color: red;"><?php echo $errors["state"] ?? ""; ?></span>
        <br><br> 

        <label for="pincode">Pincode:</label>
        <input type="text" id="pincode" name="pincode" value="<?php echo $inputs['pincode']; ?>" required>
        <span style="color: red;"><?php echo $errors["pincode"] ?? ""; ?></span>
        <br><br>

        <label for="emailid">Email ID:</label>
        <input type="email" id="emailid" name="emailid" value="<?php echo $inputs['emailid']; ?>" required>
        <span style="color: red;"><?php echo $errors["emailid"] ?? ""; ?></span>
        <br><br>

        <label for="dos">Date of Submission:</label>
        <input type="date" id="dos" name="dos" value="<?php echo $inputs['dos']; ?>" required>
        <span style="color: red;"><?php echo $errors["dos"] ?? ""; ?></span>
        <br><br>

        <label for="mobile_no">Mobile No:</label>
        <input type="text" id="mobile_no" name="mobile_no" value="<?php echo $inputs['mobile_no']; ?>" required>
        <span style="color: red;"><?php echo $errors["mobile_no"] ?? ""; ?></span>
        <br><br>

        <button type="reset">Reset</button>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
