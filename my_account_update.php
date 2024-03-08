<?php
session_start();

$_SESSION['user_id'] = 1;

// Assuming you have already established a connection to your database
// Replace 'your_host', 'your_username', 'your_password', and 'your_database' with your actual database credentials
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'mydatabase';

// Establishing connection to the database
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $userid = $_SESSION['user_id']; // Get user id from session
    $newUsername = $_POST['username'];
    $newpassword = $_POST['password'];
    $newDOB = $_POST['dob'];
    $newgender = $_POST['gender'];
}  

// Update query
$sql = "UPDATE user_info SET username = '$newUsername', password = '$newpassword', DOB = '$newDOB', gender ='$newgender'  WHERE user_id = $userid";

if ($conn->query($sql) === TRUE) {
    header("Location: my_account.php");
} else {
    echo "Error updating record: " . $conn->error;
}

// Close connection
$conn->close();
?>
