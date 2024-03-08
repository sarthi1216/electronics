<?php
require_once('config.php');

// Check if a product ID is provided in the query parameters
if (isset($_GET['order_id']) && is_numeric($_GET['order_id'])) {
    $productId = $_GET['order_id'];

    // Fetch products from the database for the specified category
    $result = $conn->query("SELECT * FROM order_view WHERE order_id = $productId");

    if (!$result) {
        echo "Error fetching products: " . $conn->error;
    } else {
        // Fetch all rows into an array
        $products = $result->fetch_all(MYSQLI_ASSOC);
    }
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
       
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
           
        }
        .banner-link {
    background-color: #ff6600; /* Change to the desired color */
    font-weight: bold; /* Optional: make the text bold */
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
            margin-top: 10px;
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
        <a href="category_view.php" >Category View</a>
        <a href="all_products.php">Product </a>
        <a href="banner.php">banner</a>
        <a href="order.php"class="banner-link">order</a>
        <a href="message.php">customer message</a>
        <a href="about_us.php">about_us</a>
        <a href="brand.php">brand</a>
        <a href="product_view_user.php">   products view for user </a>
        <a href="logout.php">Logout</a>
    </nav>
    <header>
        <h2>order details</h2>
        <div class="username"> Welcome  <i class="fas fa-user"></i> <?php echo $adminUsername; ?></div>

    </header>
    
    <main>
    <?php
    // Display Back button
    echo "<div class='action-buttons'>
            <a href='order.php?'>Back</a>
          </div>"; 
    ?>
 <table class="table table-striped">
        <?php
        // Loop through the array and display data in a single column
        foreach ($products as $row) {
            echo "<tr>";
            echo "<th>ID</th><td>{$row['order_id']}</td></tr>";
            echo "<tr><th>Images</th><td><img src='{$row['images']}' alt='product Image' style='max-width: 100px; max-height: 100px;'></td></tr>";
            echo "<tr><th>quantity</th><td>{$row['quantity']}</td></tr>";
            echo "<tr><th>Price</th><td>{$row['total_price']}</td></tr>";
            echo "<tr><th>first name</th><td>{$row['firstname']}</td></tr>";
            echo "<tr><th>last name</th><td>{$row['lastname']}</td></tr>";
            echo "<tr><th>phone</th><td>{$row['phone']}</td></tr>";
            echo "<tr><th>email</th><td>{$row['email']}</td></tr>";
            echo "<tr><th>address</th><td>{$row['address_1']}</td></tr>";
           
       
           
         
        }
        ?>
    </table>
</main>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
