<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .form-container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }
        label {
            margin-top: 10px;
            display: block;
        }
        input[type="text"],
        input[type="email"],
        textarea,
        select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .checkbox-group input {
            margin-right: 10px;
        }
        button {
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .error {
            color: red;
            font-size: 14px;
        }
    </style>
    <script>
        function validateForm() {
            // Reset errors
            let isValid = true;
            let errorMessage = "";

            // Name validation
            let name = document.getElementById("name").value;
            if (name.trim() == "") {
                errorMessage += "Name is required.\n";
                isValid = false;
            }

            // Email validation
            let email = document.getElementById("email").value;
            let emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            if (email.trim() == "") {
                errorMessage += "Email is required.\n";
                isValid = false;
            } else if (!emailPattern.test(email)) {
                errorMessage += "Please enter a valid email address.\n";
                isValid = false;
            }

            // Education validation
            let education = document.getElementById("education").value;
            if (education == "") {
                errorMessage += "Education is required.\n";
                isValid = false;
            }

            // Gender validation
            let gender = document.querySelector('input[name="gender"]:checked');
            if (!gender) {
                errorMessage += "Gender is required.\n";
                isValid = false;
            }

            // Hobbies validation
            let hobbies = document.querySelectorAll('input[name="hobbies[]"]:checked');
            if (hobbies.length === 0) {
                errorMessage += "Please select at least one hobby.\n";
                isValid = false;
            }

            // Comment validation
            let comment = document.getElementById("comment").value;
            if (comment.trim() == "") {
                errorMessage += "Comment is required.\n";
                isValid = false;
            }

            if (!isValid) {
                alert(errorMessage);
            }

            return isValid;
        }
    </script>
</head>
<body>

<div class="form-container">
    <h2>Registration Form</h2>
    <form onsubmit="return validateForm()">
        <!-- Name -->
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">

        <!-- Email -->
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">

        <!-- Education -->
        <label for="education">Education:</label>
        <select id="education" name="education">
            <option value="">Select Education</option>
            <option value="High School">High School</option>
            <option value="Bachelor's Degree">Bachelor's Degree</option>
            <option value="Master's Degree">Master's Degree</option>
            <option value="PhD">PhD</option>
        </select>

        <!-- Gender -->
        <label>Gender:</label>
        <input type="radio" id="male" name="gender" value="Male">
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="Female">
        <label for="female">Female</label>
        <input type="radio" id="other" name="gender" value="Other">
        <label for="other">Other</label>

        <!-- Hobbies -->
        <label>Hobbies:</label>
        <div class="checkbox-group">
            <input type="checkbox" id="drawing" name="hobbies[]" value="Drawing">
            <label for="drawing">Drawing</label>
            <input type="checkbox" id="singing" name="hobbies[]" value="Singing">
            <label for="singing">Singing</label>
            <input type="checkbox" id="dancing" name="hobbies[]" value="Dancing">
            <label for="dancing">Dancing</label>
        </div>

        <!-- Comment -->
        <label for="comment">Comment:</label>
        <textarea id="comment" name="comment" rows="4"></textarea>

        <button type="submit">Submit</button>
    </form>
</div>

</body>
</html>
