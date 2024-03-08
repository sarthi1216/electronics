<?php
require_once('config.php');

// Check if the form is submitted for updating the category
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $categoryId = $_POST['category_id'];
    $newName = $_POST['new_name'];
    $newImage = $_POST['new_image'];
    $newDisplayOrder = $_POST['new_display_order'];
    $newState = $_POST['new_state'];

    $updateStmt = $conn->prepare("UPDATE electronics_categories SET name=?, image=?, display_order=?, state=? WHERE id = ?");
    $updateStmt->bind_param("ssisi", $newName, $newImage, $newDisplayOrder, $newState, $categoryId);

    if ($updateStmt->execute()) {
        header("Location: category_view.php");
    } else {
        echo "Error updating category: " . $updateStmt->error;
    }

    $updateStmt->close();
}

// Fetch category details
if (isset($_GET['id'])) {
    $categoryId = $_GET['id'];
    $categoryResult = $conn->query("SELECT * FROM electronics_categories WHERE id = $categoryId");

    if ($categoryResult) {
        $category = $categoryResult->fetch_assoc();
    } else {
        echo "Error fetching category details: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Electronics Category</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> <!-- Include Font Awesome -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">

   <style>
        body {
            font-family: 'Poppins';
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }

        main {
            width: 500px;
            margin: 20px auto;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
        }

        input {
            padding: 8px;
            margin-bottom: 16px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }

        main {
            width: 1500px;
            margin: 20px auto;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4caf50;
            color: white;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .action-buttons {
            display: flex;
            margin-top: 10px;
        }

        .action-buttons a {
            padding: 8px 12px;
            background-color: #4caf50;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            margin-right: 8px;
            display: flex; /* Align icon and text vertically */
            align-items: center;
        }

        .action-buttons a.delete {
            background-color: #f44336;
        }

        .action-buttons a i {
            margin-right: 8px; /* Adjust the space between icon and text */
        }

        .action-buttons a:hover {
            background-color: #45a049;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav {
            background-color: #333;
            padding: 10px;
            height: 100vh;
            width: 200px;
            color: white;
        }

        nav a {
            display: block;
            color: white;
            padding: 10px;
            text-decoration: none;
        }

        nav a:hover {
            background-color: #555;
        }

        section {
            flex: 1;
            padding: 20px;
        }
    </style>


</head>
<body>
    <nav>
        <a href="dashboard.php">Home</a>
        <a href="category_view.php">Category view</a>
        <a href="logout.php">Logout</a>
    </nav>

    <main>
        <header>
            <h2>Update Electronics Category</h2>
        </header>
        <form method="post" action="">
            <label for="new_name">New Name:</label>
            <input type="text" name="new_name" value="<?php echo $category['name']; ?>" required>

            <label for="new_image">New Image URL:</label>
            <input type="text" name="new_image" value="<?php echo $category['image']; ?>" required>

            <label for="new_display_order">New Display Order:</label>
            <input type="number" name="new_display_order" value="<?php echo $category['display_order']; ?>" required>

            <label for="new_state">New State:</label>
            <input type="text" name="new_state" value="<?php echo $category['state']; ?>" required>

            <input type="hidden" name="category_id" value="<?php echo $category['id']; ?>">
            <input type="submit" name="update" value="Update">
        </form>
    </main>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
