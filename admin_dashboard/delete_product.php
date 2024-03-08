<?php
require_once('config.php');

// Check if an ID is provided in the query parameters
if (isset($_GET['delete']) && is_numeric($_GET['delete'])) {
    $deleteId = $_GET['delete'];

    // Check if the user has confirmed the deletion
    if (isset($_GET['confirm']) && $_GET['confirm'] == 'true') {
        // Delete the product from the database
        $deleteStmt = $conn->prepare("DELETE FROM products WHERE id = ?");
        $deleteStmt->bind_param("i", $deleteId);

        if ($deleteStmt->execute()) {
            $deleteMessage = "Product deleted successfully!";
        } else {
            $deleteMessage = "Error deleting product: " . $deleteStmt->error;
        }

        $deleteStmt->close();
    } else {
        // Display confirmation message and link to confirm deletion
        $deleteMessage = "Are you sure you want to delete this product?";
        $deleteMessage .= '<br><a href="delete.php?delete=' . $deleteId . '&confirm=true">Yes, delete it</a>';
        $deleteMessage .= '<br><a href="products_view.php">No, go back</a>';
    }
} else {
    $deleteMessage = "Product ID not provided.";
    exit(); // Stop further execution if product ID is not provided
}

// Redirect back to the view products page
header("refresh:5;url=products_view.php");
exit();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Product</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        header {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
            width: 100%;
        }

        main {
            max-width: 600px;
            width: 80%;
            margin: 20px auto;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }

        h2 {
            color: #4caf50;
        }

        p {
            margin-bottom: 20px;
        }

        a {
            text-decoration: none;
            color: #4caf50;
            margin-right: 20px;
        }

        button {
            padding: 12px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <header>
        <h2>Delete Product</h2>
    </header>

    <main>
        <p><?php echo $deleteMessage; ?></p>
        <button onclick="location.href='products_view.php'">Back to Product View</button>
    </main>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
