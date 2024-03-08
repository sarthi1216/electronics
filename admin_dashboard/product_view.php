<?php
require_once('config.php');

// Check if a category ID is provided in the query parameters
if (isset($_GET['category_id']) && is_numeric($_GET['category_id'])) {
    $categoryId = $_GET['category_id'];

    // Fetch products from the database for the specified category
    $result = $conn->query("SELECT * FROM products WHERE category_id = $categoryId");



    if (!$result) {
        echo "Error fetching products: " . $conn->error;
    }
} else {
    echo "Category ID not provided.";
    exit(); // Stop further execution if category ID is not provided
}
// Retrieve and set the category ID
if (isset($_GET['category_id']) && is_numeric($_GET['category_id'])) {
    $categoryId = $_GET['category_id'];
} else {
    echo "Category ID not provided.";
    exit(); // Stop further execution if category ID is not provided
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Products</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


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

      

        .action-buttons {
            display: flex;
            margin-top: 60px;
            width: 100%; /* Set the width to 100% to occupy the full width */
           
        }

        .action-buttons a {
            padding: 8px 12px;
            background-color: #4caf50;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            margin-right: 8px;
        }

        .action-buttons a.delete {
            background-color: #f44336;
        }

        .action-buttons a:hover {
            background-color: #45a049;
        }

        table {
            width: 90%;
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

        nav {
            width: 200px; /* Set the width of the navigation bar */
            background-color: #333;
            color: white;
            padding: 10px;
            position: fixed; /* Make the navigation bar fixed */
            height: 100vh; /* Make the navigation bar take the full height of the viewport */
            display: flex;
            flex-direction: column;
        
        }

        nav a {
            padding: 10px;
            text-decoration: none;
            color: white;
           
        }

        nav a:hover {
            background-color: #555;
        }

        main {
            margin-left: 300px; /* Adjust the margin to accommodate the navigation bar width */
        }
        .banner-link {
    background-color: #ff6600; /* Change to the desired color */
    font-weight: bold; /* Optional: make the text bold */
}
.username {
            position: absolute;
            top: 10px;
            right: 20px;
            color: white;
        }
        

    </style>
</head>
<body>
<nav>
<a href="dashboard.php">Home</a>
          
        <a href="category_view.php" class="banner-link">Category View</a>
        <a href="all_products.php" >Product </a>
        <a href="banner.php">banner</a>
        <a href="order.php">order</a>
        <a href="message.php">customer message</a>
        <a href="about_us.php">about_us</a>
        <a href="brand.php">brand</a>
        <a href="product_view_user.php">   products view for user </a>
        <a href="logout.php">Logout</a>
    </nav>
   
    <header>
        <h2>View Products</h2>
        <div class="username"> Welcome  <i class="fas fa-user"></i> <?php echo $adminUsername; ?></div>

    </header>

    <main>
    <div class="action-buttons">
        <a href="category_view.php">Back</a>
        <a href="products.php">Add</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Images</th>
                <th>Sale Price</th>
                <th>Status</th>
                <th>Category</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>{$row['id']}</td>";
                echo "<td>{$row['name']}</td>";
                echo "<td><img src='{$row['images']}' alt='product Image' style='max-width: 100px; max-height: 100px;'></td>";
                echo "<td>{$row['sale_price']}</td>";
                echo "<td>{$row['status']}</td>";
                echo "<td>{$row['category_id']}</td>";
                echo "<td class='action-buttons'>
                        <a href='update_product.php?id={$row['id']}'><i class='fas fa-edit'></i> Update</a>
                        <a href='delete_product.php?id={$row['id']}' class='delete'><i class='fas fa-trash-alt'></i> Delete</a>
                        <a href='full_view_product.php?id={$row['id']}'><i class='fas fa-glasses'></i> Full View</a>
                      </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</main>

</body>
</html>

<?php
// Close the database connection
$conn->close();
?>