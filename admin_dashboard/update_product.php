<?php
require_once('config.php');

// Check if an ID is provided in the query parameters
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $productId = $_GET['id'];

    // Fetch product details from the database for the specified ID
    $result = $conn->query("SELECT * FROM products WHERE id = $productId");

    if (!$result) {
        echo "Error fetching product details: " . $conn->error;
    }

    // Handle form submission for updating product details
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Validate and sanitize input data
        $name = htmlspecialchars($_POST['name']);
        $description = htmlspecialchars($_POST['description']);
        $quantity = intval($_POST['quantity']);
        $price = floatval($_POST['price']);
        $salePrice = floatval($_POST['sale_price']);
        $type = htmlspecialchars($_POST['type']);
        $status = htmlspecialchars($_POST['status']);
        $category_id = intval($_POST['category_id']);
        $images = htmlspecialchars($_POST['images']);

        // Update the product in the database
        $updateStmt = $conn->prepare("UPDATE products SET 
            name = ?, description = ?, quantity = ?, price = ?, sale_price = ?, type = ?, status = ?, category_id = ?, images = ?
            WHERE id = ?");
        $updateStmt->bind_param("ssiisssisi", $name, $description, $quantity, $price, $salePrice, $type, $status, $category_id, $images, $productId);

        if ($updateStmt->execute()) {
           header("Location: product_view.php?category_id=$category_id");
        } else {
            echo "Error updating product: " . $updateStmt->error;
        }

        $updateStmt->close();
    }
} else {
    echo "Product ID not provided.";
    exit(); // Stop further execution if product ID is not provided
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">
    <style>
        body {
            font-family: 'Poppins';
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
        }

        header {
            background-color: #333;
            color: white;
            padding: 40px;
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
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
        }

        input, select {
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
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
        <h2>Update Product</h2>
    </header>

    <main>
        <form method="post">
            <?php
            // Display the existing product details in the form for editing
            while ($row = $result->fetch_assoc()) {
                ?>
                <label for="name">Name:</label>
                <input type="text" name="name" value="<?= $row['name'] ?>" required>

                <label for="description">Description:</label>
                <textarea name="description" required><?= $row['description'] ?></textarea>

                <label for="quantity">Quantity:</label>
                <input type="number" name="quantity" value="<?= $row['quantity'] ?>" required>

                <label for="price">Price:</label>
                <input type="number" name="price" step="0.01" value="<?= $row['price'] ?>" required>

                <label for="sale_price">Sale Price:</label>
                <input type="number" name="sale_price" step="0.01" value="<?= $row['sale_price'] ?>" required>

                <label for="type">Type:</label>
                <input type="text" name="type" value="<?= $row['type'] ?>" required>

                <label for="status">Status:</label>
                <select name="status" required>
                    <option value="published" <?= ($row['status'] == 'published') ? 'selected' : '' ?>>Published</option>
                    <option value="draft" <?= ($row['status'] == 'draft') ? 'selected' : '' ?>>Draft</option>
                </select>

                <label for="category_id">Category ID:</label>
                <input type="number" name="category_id" value="<?= $row['category_id'] ?>" required>

                <label for="images">Images:</label>
                <input type="text" name="images" value="<?= $row['images'] ?>" required>

                <button type="submit">Update Product</button>
                <?php
            }
            ?>
        </form>
    </main>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
