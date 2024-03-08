<?php
// Start the session
session_start();

// Check if admin_id is set in the session
if (!isset($_SESSION['admin_id'])) {
    // Redirect to login page or handle unauthorized access
    header("Location: login.php");
    exit;
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate brand name (you can add more validation if needed)
    $brand_name = trim($_POST["brand_name"]);

    // Check if brand name is empty
    if (empty($brand_name)) {
        $error_message = "Brand name is required.";
    } else {
        // Database connection parameters
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

        // Prepare SQL statement to insert brand
        $sql = $conn->prepare("INSERT INTO brand (admin_id, name) VALUES (?, ?)");

        // Bind parameters
        $sql->bind_param("is", $_SESSION['admin_id'], $brand_name);

        // Execute the statement
        if ($sql->execute()) {
            header('Location: brand.php');
        } else {
            $error_message = "Error: " . $sql->error;
        }

        // Close the connection
        $conn->close();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Brand</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styles */
        body {
            padding: 20px;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <h2 class="text-center">Add Brand</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="mx-auto">
        <div class="form-group">
            <label for="brand_name">Brand Name:</label>
            <input type="text" id="brand_name" name="brand_name" class="form-control">
        </div>
        <!-- Hidden input field for admin_id -->
        <input type="hidden" id="admin_id" name="admin_id" value="<?php echo $_SESSION['admin_id']; ?>">
        <button type="submit" class="btn btn-primary btn-block">Add Brand</button>
        <a href="brand.php" class="btn btn-secondary btn-block mt-3">Back</a>
    </form>
</body>

</html>

