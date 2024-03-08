<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the title and content are set and not empty
    if (isset($_POST['title']) && isset($_POST['content']) && !empty($_POST['title']) && !empty($_POST['content'])) {
        // Sanitize the input data
        $title = htmlspecialchars($_POST['title']);
        $content = $_POST['content']; // Note: No need to sanitize HTML content for database insertion

        // Your database connection code (assuming you've already included config.php)
        require_once('config.php');

        // Prepare and execute SQL statement to insert data into your database
        $stmt = $conn->prepare("INSERT INTO about_us (title, text ) VALUES (?, ?)");
        $stmt->bind_param("ss", $title, $content);

        if ($stmt->execute()) {
            // Data inserted successfully
            $message = "Form submitted successfully.";
        } else {
            // Error occurred
            $message = "Error: " . $stmt->error;
        }

        // Close the statement and database connection
        $stmt->close();
        $conn->close();
    } else {
        // Title or content is empty
        $message = "Please fill in both title and content fields.";
    }
} else {
    // If the form is not submitted, redirect the user back to the form page
    header("Location: about_us.php");
    exit;
}

// Redirect back to the form page with a popup message
echo "<script>window.location.href='about_us.php'; alert('$message');</script>";
?>
