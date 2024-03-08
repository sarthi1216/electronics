<?php
// Assuming you have a database connection established
require_once('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle form submission
    $name = $_POST['name'];
    $order = $_POST['order'];
    $state = $_POST['state'];

    // Upload image (you may need to handle file uploads securely)
    $imageFileName = '';

    if (isset($_FILES['image'])) {
        $uploadDirectory = 'uploads/';
        $imageFileName = $uploadDirectory . basename($_FILES['image']['name']);

        move_uploaded_file($_FILES['image']['tmp_name'], $imageFileName);
    }

    // Insert data into the database
    $stmt = $conn->prepare("INSERT INTO electronics_categories (name, image, display_order, state, admin_id) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssisi", $name, $imageFileName, $order, $state, $_SESSION['admin_id']);
    

    if ($stmt->execute()) {
        echo  header('Location: category_view.php');
    } else {
        echo "Error adding category: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>