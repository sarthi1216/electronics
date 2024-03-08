<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming you have a database connection established
    $db_host = 'localhost';  // Your database host
    $db_username = 'root';  // Your database username
    $db_password = '';  // Your database password
    $db_name = 'mydatabase';  // Your database name

    // Create a database connection
    $conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

    // Check if the connection was successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Escape and sanitize the form inputs to prevent SQL injection
    $brand_name = mysqli_real_escape_string($conn, $_POST['brand_name']); // Assuming the form field is named "brand_name"

    // Assuming you already have the brand_id from the previous page
    $brand_id = mysqli_real_escape_string($conn, $_GET['id']);

    // Your SQL query to update brand information
    $sql = "UPDATE brand SET name = '$brand_name' WHERE brand_id = $brand_id";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        // If the update was successful, redirect back to the previous page or any other page as needed
        header("Location: brand.php");
        exit();
    } else {
        // If an error occurred during the update process, you can handle it accordingly
        echo "Error updating record: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    // If the form is not submitted via POST method, redirect to an error page or handle it accordingly
    header("Location: error_page.php");
    exit();
}
?>
