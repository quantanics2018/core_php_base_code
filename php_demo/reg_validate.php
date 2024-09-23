<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .error {
            color: red;
        }
        .success {
            color: green;
        }
    </style>
</head>
<body>
    <h1>College Registration Form</h1>

    <?php
    // Initialize variables
    $name = $email = $phone = $course = $academicHistory = "";
    $nameErr = $emailErr = $phoneErr = $courseErr = $academicHistoryErr = "";
    $successMessage = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validate name
        if (empty($_POST["name"])) {
            $nameErr = "Name is required.";
        } else {
            $name = htmlspecialchars($_POST["name"]);
        }

        // Validate email
        if (empty($_POST["email"])) {
            $emailErr = "Email is required.";
        } else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format.";
        } else {
            $email = htmlspecialchars($_POST["email"]);
        }

        // Validate phone
        if (empty($_POST["phone"])) {
            $phoneErr = "Phone number is required.";
        } else {
            $phone = htmlspecialchars($_POST["phone"]);
        }

        // Validate course
        if (empty($_POST["course"])) {
            $courseErr = "Course selection is required.";
        } else {
            $course = htmlspecialchars($_POST["course"]);
        }

        // Validate academic history
        if (empty($_POST["academicHistory"])) {
            $academicHistoryErr = "Academic history is required.";
        } else {
            $academicHistory = htmlspecialchars($_POST["academicHistory"]);
        }

        // If no errors, display success message
        if (empty($nameErr) && empty($emailErr) && empty($phoneErr) && empty($courseErr) && empty($academicHistoryErr)) {
            $successMessage = "Registration successful for $name!";
        }
    }
    ?>

    <form method="post" action="">
        <label for="name">Full Name:</label><br>
        <input type="text" id="name" name="name" value="<?php echo $name; ?>">
        <span class="error"><?php echo $nameErr; ?></span><br><br>

        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email" value="<?php echo $email; ?>">
        <span class="error"><?php echo $emailErr; ?></span><br><br>

        <label for="phone">Phone Number:</label><br>
        <input type="text" id="phone" name="phone" value="<?php echo $phone; ?>">
        <span class="error"><?php echo $phoneErr; ?></span><br><br>

        <label for="course">Course:</label><br>
        <select id="course" name="course">
            <option value="">Select a course</option>
            <option value="Computer Science" <?php if ($course == "Computer Science") echo "selected"; ?>>Computer Science</option>
            <option value="Mathematics" <?php if ($course == "Mathematics") echo "selected"; ?>>Mathematics</option>
            <option value="Physics" <?php if ($course == "Physics") echo "selected"; ?>>Physics</option>
        </select>
        <span class="error"><?php echo $courseErr; ?></span><br><br>

        <label for="academicHistory">Academic History:</label><br>
        <textarea id="academicHistory" name="academicHistory"><?php echo $academicHistory; ?></textarea>
        <span class="error"><?php echo $academicHistoryErr; ?></span><br><br>

        <input type="submit" value="Register">
    </form>

    <?php
    if ($successMessage) {
        echo "<p class='success'>$successMessage</p>";
    }
    ?>
</body>
</html>
