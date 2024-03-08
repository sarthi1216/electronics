<?php
require_once('config.php');

// Fetch categories for dropdown menu
$categoryResult = $conn->query("SELECT * FROM electronics_categories");

if (!$categoryResult) {
    echo "Error fetching categories: " . $conn->error;
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $salePrice = $_POST['sale_price'];
    $type = $_POST['type'];
    $status = $_POST['status'];
    $categoryId = $_POST['category'];
// Validate input

    // Upload multiple images (you may need to handle file uploads securely)
    $imageFileNames = [];

    if (!empty($_FILES['images']['name'][0])) {
        $uploadDirectory = 'product_images/';
        $totalFiles = count($_FILES['images']['name']);

        for ($i = 0; $i < $totalFiles; $i++) {
            $imageFileName = $uploadDirectory . basename($_FILES['images']['name'][$i]);
            move_uploaded_file($_FILES['images']['tmp_name'][$i], $imageFileName);
            $imageFileNames[] = $imageFileName;
        }
    }

    // Insert data into the database
    $stmt = $conn->prepare("INSERT INTO products (admin_id, name, description, quantity, price, sale_price, type, status, category_id, images) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param('ssiidsssss',$adminID, $name, $description, $quantity, $price, $salePrice, $type, $status, $categoryId, implode(',', $imageFileNames));

    if ($stmt->execute()) {
        header("Location: product_view.php?category_id=$category_id");
    } else {
        echo "Error adding product: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>