<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Connect to your MySQL database
    $pdo = new PDO('mysql:host=localhost;dbname=mydatabase', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare SQL statement to fetch user by email
    $stmt = $pdo->prepare("SELECT * FROM user_info WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verify password and redirect accordingly
    if ($user && password_verify($password, $user['password'])) {
        // Password is correct, set session variables and redirect to dashboard or wherever you want
        $_SESSION['user_id'] = $user['user_id']; // Assuming you have a column named 'id' for unique user identification
        header("Location: dashboard.php");
        exit();
    } else {
        // Invalid email or password, redirect back to login page with error message
        header("Location: home.php");
        exit();
    }
} else {
    // If the form is not submitted, redirect back to the login page
    header("Location: login.html");
    exit();
}
?>
