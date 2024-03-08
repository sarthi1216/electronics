<?php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = trim($_POST["username"]);
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $email = $_POST["email"];

    // Validate username
    if (empty($username)) {
        $errors[] = "Username is required";
    }

    // Validate password
    if (empty($password)) {
        $errors[] = "Password is required";
    } elseif (strlen($password) < 6) {
        $errors[] = "Password must be at least 6 characters long";
    }

    // Validate email
    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }

    // Check if passwords match
    if ($password !== $confirm_password) {
        $errors[] = "Passwords do not match";
    }

    // If no errors, proceed with registration
    if (empty($errors)) {
        try {
            // Connect to MySQL database using PDO
            $pdo = new PDO('mysql:host=localhost;dbname=mydatabase', 'root', '');

            // Set PDO to throw exceptions on error
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Prepare SQL statement to insert user data
            $stmt = $pdo->prepare("INSERT INTO user_info (username, email, password) VALUES (:username, :email, :password)");

            // Bind parameters
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password_hash); // You should hash the password before storing it in the database

            // Hash the password
            $password_hash = password_hash($password, PASSWORD_DEFAULT);

            // Execute the statement
            $stmt->execute();

            // Output success message
            echo "Registration successful! <br>";
            echo "Username: $username <br>";
            echo "Email: $email <br>";
        } catch (PDOException $e) {
            // Display errors if any
            echo "Error: " . $e->getMessage();
        }
    } else {
        // Display errors if any
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
} else {
    // If the form is not submitted, redirect back to the registration form
    header("Location: registration_form.html");
    exit();
}
?>
