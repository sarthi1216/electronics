<?php
// Database connection details (replace with your own)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data (with basic sanitization)
$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

// Prepare SQL statement
$sql = "INSERT INTO contact_messages (name, email, message) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);

// Bind parameters and execute
$stmt->bind_param("sss", $name, $email, $message);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    session_start(); // Start a session to store the message
    $_SESSION['message'] = "Message saved successfully!";
    header("Location: contact.php"); // Replace with the URL of your contact page
    exit;
} else {
    session_start();
    $_SESSION['message'] = "Error saving message.";
    header("Location: contact.php");
    exit;
}


// Close statement and connection
$stmt->close();
$conn->close();
?>
