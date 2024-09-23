<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Validation</title>
</head>
<body>
    <h1>Email Address Validation</h1>
    
    <form method="post" action="">
        <label for="email">Enter your email address:</label>
        <input type="text" id="email" name="email" required>
        <input type="submit" value="Validate Email">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the email input
        $email = $_POST['email'];

        // Regular expression for validating email
        $pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

        // Validate the email
        if (preg_match($pattern, $email)) {
            echo "<p style='color: green;'>The email address '$email' is valid.</p>";
        } else {
            echo "<p style='color: red;'>The email address '$email' is invalid. Please enter a valid email address.</p>";
        }
    }
    ?>
</body>
</html>
